const boxes = document.getElementsByClassName("box");
const colordlg = document.getElementById("colordlg");
const bordertool = document.querySelector("#bordertool");
//let activeobj = null;
for(let box of boxes)
    box.addEventListener("click", function(sender){
        //activeobj = box;
        sender = this;
        colordlg.click()
        colordlg.onchange= function(){
            //activeobj.style.backgroundColor = colordlg.value;
            sender.style.backgroundColor = colordlg.value;
        };
    },false);


    bordertool.addEventListener("change",function(){
        for (let box of boxes)
            box.style.borderRadius = this.value + "px";
    },false);

// const boxes = document.getElementsByClassName("box");
// const colordlg = document.getElementById("colordlg");
// document.querySelector(".box")
// document.querySelectorAll("#colordlg")

// const changeRadius = document.querySelector("#bordertool");

// for (let box of boxes)
//     box.addEventListener("click", function (sender){
//         sender = this;
//         colordlg.click();
//         colordlg.onchange = function () {
//             sender.style.backgroundColor = colordlg.value;
//     };
//     }, false);

//     changeRadius = addEventListener("change", function () {
//         for ( let box of boxes)
//             box.style.borderRadius = changeRadius.value + "px";     
//     }, false);