'use strict';

class Querier{
    static api
    static pageApi
    static response

    static {
        this.api = "http://localhost/BibloUE/scripts/queryer.php?query=";
        this.pageApi = axios.create({
            baseURL: this.api
        })
    }

    static usingApi = async(endpoint) => {
        this.response = (await axios.get(this.api+endpoint)).data
        return this.response
    }

    static getAdmins = async() =>{
        return await this.usingApi("getAdmins");
    }
}

export {Querier};
