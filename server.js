const Influx = require('influx');
//const influx = new Influx.InfluxDB('http://localhost:8086/countingpeople')
const influx = new Influx.InfluxDB({
    host: 'localhost',
    database: 'countingpeople',
    schema: [
      {
        measurement: 'countppl',
        fields: { pplCount: Influx.FieldType.FLOAT, sensor_id: Influx.FieldType.STRING },
        tags: []
      }
    ]
  });

  //const influx = new Influx.InfluxDB('http://localhost:8086/countingpeople')


  influx.getDatabaseNames()
  .then(names => {
    if (!names.includes('countingpeople')) {
      return influx.createDatabase('ocean_tides');
    }
  })
  .then(() => {
    app.listen(app.get('port'), () => {
      console.log(`Listening on ${app.get('port')}.`);
    });
    writeDataToInflux(hanalei);
    writeDataToInflux(hilo);
    writeDataToInflux(honolulu);
    writeDataToInflux(kahului);
  })
  .catch(error => console.log({ error }));





  influx.query(`
    select * from countppl
    
  `)
  .then( result => response.status(200).json(result) )
  .catch( error => response.status(500).json({ error }) );