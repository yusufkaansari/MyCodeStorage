// fonsiyona gönderilen parametre sayısını gösterir
function multi(x, y = 1) {
    return arguments.length;
}

multi(7, 3, 5);
//3 döndürecek