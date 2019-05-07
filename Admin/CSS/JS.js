function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
function ok(){
    alert("ok");
}
function myFn(){
    swal({ 
          title: "Success",
          text: "Thank you for contacting us. We will get back to you soon!",
          type: "success" 
    },
         function(){
            //event to perform on click of ok button of sweetalert
    });
}
$("#cbCheckAll").click(function () {
    $('.cb').not(this).prop('checked', this.checked);
});

