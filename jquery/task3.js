function func(event){
    if (event.keyCode == '38'){
        alert('Нажата клавиша вверх');
    }
    if (event.keyCode == '40'){
        alert('Нажата клавиша вниз');
    }
    if (event.keyCode == '37'){
        alert('Нажата клавиша влево');
    }
    if (event.keyCode == '39'){
        alert('Нажата клавиша вправо');
    }
}
window.addEventListener('keydown',func,false);