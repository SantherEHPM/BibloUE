'use strict'


let datos = []
let colors = []
let colorsB = []

for(let i=0;i<4;i++){
  datos[i]=Math.random()*100+1
  colors[i]='rgba('+Math.random()*255+','+Math.random()*255+','+Math.random()*255
  colorsB[i]=colors[i]+')'
  colors[i]+=',0.5)';
}

const data = {
    labels: [
      'Finanzas',
      'Economia',
      'Ingenieria',
      'Marketing'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: datos,
      backgroundColor: colorsB,
      hoverOffset: 4
    }]
  };
  const config = {
    type: 'pie',
    data: data,
  };
  let ponque = new Chart(document.querySelector('#ponque'),config);