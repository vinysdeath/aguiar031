let n1 = Number(prompt("digite uma nota:"));
let n2 = Number(prompt("digite outra nota:"));

let media = (n1 + n2)/2;

if (media>=7) {
    alert("Aprovado, "+media);
} 

if ((media>=1.7) && (media<=6.9)) {
    alert("Recuperação, "+media);
}

if (media<1.7) {
    alert("Reprovado, "+media);
}
