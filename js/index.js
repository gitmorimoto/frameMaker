import { GetData } from "./class.GetData.js";
import {Test} from "./class.Test.js";
import {Confirm} from "./class.confirm.js";

window.addEventListener('DOMContentLoaded', () => {
    //////////test data/////////////////////////////////////////////
    
    const testArray = ["td0","td1","td2","td3","td4","td5","td6"];
    const test = new Test(testArray);
    test.getTestData();
    
    /////////////////////////////////////////////////////////////////
    /////get input data//////////////////////////////////////////////
    const getData = new GetData(6);
   
    const submitBtn = document.getElementById("submitBtn"); 
    submitBtn.addEventListener("click", () => {
        const data = getData.getData();
        console.log(data);
    });
    /////////////////////////////////////////////////////////////////
    //////confirm data //////////////////////////////////////////////
    const confirmBtn = document.getElementById("confirmBtn");
    const tdObj = [];
    const dispObj = []; 
    for(let i=0;i<7;i++){
        tdObj[i] = document.getElementById("td"+i);
        dispObj[i] = document.getElementById("disp"+i);
    }
    confirmBtn.addEventListener("click", () => {
        const confirm = new Confirm(tdObj,dispObj);
        confirm.confirmData();
    });
})