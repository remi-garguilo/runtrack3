function sommenombrespremiers(n, n2) {
    if (n<2 || n2 < 2) return false;

    for (var i = 2; i <= Math.sqrt(n); i++)
        if (n % i == 0) console.log("n false");
        else return true;
    for (var j = 2; j <= Math.sqrt(n2); j++)
        if (n2 % j == 0) console.log("n2 false");
        else return true;
}
sommenombrespremiers(4, 4);