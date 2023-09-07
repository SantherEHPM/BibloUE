'use strict'

const dataGenerator = () =>{
    let datos = []
    for(let i=0;i<12;i++){
        datos[i]=Math.random()*50+1
    }
    return datos
}

const labels = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

const data = {
  labels: labels,
  datasets: [{
    label: 'Economia',
    data: dataGenerator(),
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  },
  {
    label: 'Ingenieria',
    data: dataGenerator(),
    fill: false,
    borderColor: 'rgb(75, 250, 152)',
    tension: 0.1
  },
  {
    label: 'Marketing',
    data: dataGenerator(),
    fill: false,
    borderColor: 'rgb(154, 23, 192)',
    tension: 0.1
  },
  {
    label: 'Finanzas',
    data: dataGenerator(),
    fill: false,
    borderColor: 'rgb(230, 140, 212)',
    tension: 0.1
  }]
};

  const config = {
    type: 'line',
    data: data,
  };

  let rayas = new Chart(document.querySelector('#rayas'),config);