'use strict'

class Querier{
    static api
    static pageApi
    static response

    static {
        this.api = 'http://localhost/BibloUE/back/api/api.php'
        this.pageApi = axios.create({
            baseURL: this.api
        })
    }

    static pacman = async()=>{
        $.post(this.api,{wea:':v'},(data)=>{
            if(data!=null){
                console.info(data)
            }
            else{
                console.error('ta mal')
            }
        })
        // let data = new FormData()
        // data.append("wea", ":v")

        // fetch(this.api,{
        //     method:'POST',
        //     body:data
        // }).then(datos=>datos.json)
        // .then(masdatos=>{
        //     console.log(masdatos)
        // })
        // await axios.post(this.api,
        //     {
        //         wea:':v'
        //     }
        // ).then((res)=>{
        //     console.warn(res)
        // })
        // console.log(this.response)
        // let data = new FormData()
        // data.append("wea", ":v")

        // const request = new XMLHttpRequest();
        // request.open("POST", this.api);
        // request.send(data);
    }

    static gettingApi = async(endpoint,params) => {
        params=Object.assign({},{query:endpoint})
        this.response = (await axios.get(this.api,params))
        return this.response
    }

    
    static postingApi = async(endpoint,params) => {
         params=Object.assign(params,{query:endpoint})
        console.log(params)
        this.response = (await axios.get(this.api,{params}));
        return (this.response)
        // $.get(this.api,{params},(data)=>{
        //     if(data!=null){
        //         console.info(data)
        //     }
        //     else{
        //         console.error('ta mal')
        //     }
        // })

    }
    
    static userSignUp = async(first_name,last_name,carnet,email,cellphone,password) =>{
        let params = {
            first_name:first_name,
            last_name:last_name,
            carnet:carnet,
            email:email,
            cellphone:cellphone,
            password:password
        }
        console.log((await this.postingApi('userSignUp',params)))
    }
}

export {Querier}
