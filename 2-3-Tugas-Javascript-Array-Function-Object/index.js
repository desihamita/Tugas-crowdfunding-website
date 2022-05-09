// Jawaban soal pertama //

var daftarHewan = ["2. Komodo", "5. Buaya", "3. Cicak", "4. Ular", "1. Tokek"];

var daftarHewan_sorted = daftarHewan.sort();
for(let i=0; i < daftarHewan_sorted.length; i++)
{
    console.log(daftarHewan_sorted[i])
}

// Jawaban Soal Kedua //

var data = {name : "John" , age : 30 , address : "Jalan Pelesiran" , hobby : "Gaming" };

function introduce(data)
{
    return "Nama saya " + data.name + ", umur saya " + data.age + " tahun, alamat saya " + data.address + ", dan saya punya hobby yaitu " + data.hobby; 
}

var perkenalan = introduce(data)
console.log(perkenalan) // Menampilkan "Nama saya John, umur saya 30 tahun, alamat saya di Jalan Pelesiran, dan saya punya hobby yaitu Gaming" 

// Jawaban Soal Ketiga //

var hitung_1 = hitung_huruf_vokal("Muhammad")
var hitung_2 = hitung_huruf_vokal("Iqbal")

function hitung_huruf_vokal(str)
{
    let daftarHurufVokal = 'aiueo';
    let hitung = 0;

    for(var i=0; i<str.length; i++)
    {
        if(daftarHurufVokal.indexOf(str.toLowerCase()[i]) !== -1)
        {
            hitung += 1;
        }
    }
    return hitung;
}

console.log(hitung_1 , hitung_2) // 3 2

// Jawaban Soal Keempat //

function hitung(x)
{
    return 2 * x - 2;
}

console.log( hitung(0) ) // -2
console.log( hitung(1) ) // 0
console.log( hitung(2) ) // 2
console.log( hitung(3) ) // 4
console.log( hitung(5) ) // 8