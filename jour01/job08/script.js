function sommenombrespremiers(n, n2) {
    if (n<2 || n2 < 2) return false;

    for (var i = 2; i <= Math.sqrt(n); i++)
        if (n % i == 0) return false;
    for (var j = 2; j <= Math.sqrt(n2); j++)
        if (n2 % j == 0) return false;
    if (n != false && n2 != false) console.log(n + n2);
}
console.log(sommenombrespremiers(3, 5));