wbtn = document.getElementById("white_btn");
wbtn.addEventListner('click', function(){
    document.getElementById('target').className='white';
})
bbtn = document.getElementById("black_btn");
bbtn.addEventListner('click', function(){
    document.getElementById('target').className='black';
})