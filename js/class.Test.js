export class Test{
    testData = [];
    tdObj = [];
    constructor(testData){
        this.testData = testData;
        //console.log("test");
    }
    getTestData(){
        for(let i=0;i<this.testData.length;i++){
            //console.log(this.testData[i]);
            //console.log('i'+i);
            const elem = document.getElementById('td'+i);
            //console.log(elem);
            if(elem){
                elem.value = this.testData[i];
                this.tdObj[i] = elem;
            }
           
        }
    }
}   