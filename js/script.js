
user_block = document.getElementById('user');

console.log(user_block.innerText);
console.log(user_block);



function userUnline(){
    if (user_block.innerText == ''){
        console.log('Пусто');
    }
    else{
        user_block.classList.add('border-btm')
    }
};

// Раскрывающееся меню

burger = document.getElementById('burger');
menu = document.getElementById('menu');

menu.classList.add('none');

ccount = 0;

function dropMenu(){

    for(let i=0; i<menu.classList.length; i++){
        if(ccount % 2 == 0){ 
            menu.classList.remove('none');
            burger.classList.add('transrot');
        }
        else if(ccount % 2 != 0){
            menu.classList.add('none');
            burger.classList.remove('transrot');
        }
    }

    ccount ++;
    console.log(ccount);
    
};

burger.addEventListener('click', dropMenu);

userUnline();
