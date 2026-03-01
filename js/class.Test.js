export class Test{
    testData = [];
    tdObj = [];
    constructor(testData){
        this.testData = testData;
        console.log("test");
    }
    getTestData(){
        for(let i=0;i<this.testData.length;i++){
            console.log(this.testData[i]);
            console.log('i'+i);
            this.tdObj[i]= document.getElementById(this.testData[i]);
            console.log(this.tdObj[i]);
            this.tdObj[i].value = this.testData[i];
        }
    }
}   