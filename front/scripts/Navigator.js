'use strict'

const navigate = (view,role) =>{
    const baseURL = '/BibloUE/front/views/'
    window.location.pathname=baseURL+((role==='user')?('user'):('admi'))+'/'+view+'.php'
}

export {navigate}