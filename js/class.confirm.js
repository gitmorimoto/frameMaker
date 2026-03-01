export class Confirm
{
    tdObj = [];
    dispObj = [];
    constructor(tdObj,dispObj){
        this.tdObj = tdObj;
        this.dispObj = dispObj;
    }
    confirmData(){
        for(let i=0;i<this.tdObj.length;i++){
            this.dispObj[i].textContent = this.tdObj[i].value;
        }
    }
}