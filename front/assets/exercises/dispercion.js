


let colors = []
let colorsB = []
const dataGenerator = () =>{
    let datos = []
    for(let i=0;i<120;i++){
        datos[i]={
            x:Math.random()*100+1,
            y:Math.random()*50+15
        }
    }
    return datos
}

'use strict'
const data = {
    datasets: [{
      label: 'Hombres',
      data: dataGenerator(),
      backgroundColor: 'rgb(100, 99, 255)'
    },
    {
        label: 'Mujeres',
        data: dataGenerator(),
        backgroundColor: 'rgb(255, 99, 132)'
      }],
  };

  const config = {
    type: 'scatter',
    data: data,
    options: {
      scales: {
        x: {
          type: 'linear',
          position: 'bottom'
        }
      }
    }
  };

let dispercion = new Chart(document.querySelector('#dispercion'),config);