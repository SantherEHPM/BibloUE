'use strict'

let datos = []
let colors = []
let colorsB = []

for(let i=0;i<12;i++){
  datos[i]=Math.random()*100+1
  colors[i]='rgba('+Math.random()*255+','+Math.random()*255+','+Math.random()*255
  colorsB[i]=colors[i]+')'
  colors[i]+=',0.5)';
}



console.log(datos)

const labels = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
const data = {
  labels: labels,
  datasets: [{
    label: 'Cantidad de libros prestados por mes',
    data: datos,
    backgroundColor:colors,
    borderColor:colorsB,
    borderWidth: 1
  }]}
  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };
  let barritas = new Chart(document.querySelector('#barritas'),config);