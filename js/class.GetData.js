export class GetData{
    dataSize = 0;
    dataArray = [];
    tdObj = [];
    constructor(dataSize){
        this.dataSize = dataSize;
    }
    getData(){
        for(let i=0;i<this.dataSize;i++){
            console.log("td"+i);
            this.tdObj[i] = document.getElementById("td"+i);
            this.dataArray[i] = this.tdObj[i].value;
            

        }
        return this.dataArray;
    }

}