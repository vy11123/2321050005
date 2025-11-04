let danhSachPhim = [
    {
        id:1,
        tenPhim: "Mưa Đỏ",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 124,
        quocGia: "Việt Nam",
        poster: "img/350x495-muado.jpg",
        theLoai: "Phim Chiếu Rạp",
        trailer:
    },
    {
        id:2,
        tenPhim: "Minion",
        namPhatHanh: 2025,
        tuoi: 15,
        thoiLuong: 120,
        quocGia: "Mỹ",
        poster: "img/phim/minion.jpg",
        theLoai: "Phim Hoạt Hình",
    },
    {
        id:3,
        tenPhim: "Nemo",
        namPhatHanh: 2025,
        tuoi: 12,
        thoiLuong: 120,
        quocGia: "Mỹ",
        poster: "img/phim/nemo.jpg",
        theLoai: "Phim Hoạt Hình",
    },
    {
        id:4,
        tenPhim: "Chúa Tể huyền Bí",
        namPhatHanh: 2025,
        tuoi: 13,
        thoiLuong: 120,
        quocGia: "Trung Quốc",
        poster: "img/phim/chuatehuyenbi.webp",
        theLoai: "Anime",
    },
    {
        id:5,
        tenPhim: "Bỗng Dưng Trúng Số",
        namPhatHanh: 2024,
        tuoi: 15,
        thoiLuong: 120,
        quocGia: "Hàn Quốc",
        poster: "img/phim/bongdungtrungso.jpg",
        theLoai: "Phim Hài",
    },
    {
        id:6,
        tenPhim: "Cám",
        namPhatHanh: 2024,
        tuoi: 16,
        thoiLuong: 123,
        quocGia: "Việt Nam",
        poster: "img/phim/cam.jpg",
        theLoai: "Phim Kinh Dị",
    },
];

let phimHienTai = danhSachPhim[0];

let banner = document.getElementsByClassName('troi')[0];
let nam = document.getElementsByClassName('nam')[0];
let tuoi = document.getElementsByClassName('tuoi')[0];
let thoiLuong = document.getElementsByClassName('thoiLuong')[0];
let quocGia = document.getElementsByClassName('quocGia')[0];

function chonPhim(idPhim){
    for(let i=0; i<danhSachPhim.length; i++){
        if(danhSachPhim[i].id == idPhim){
            debugger
            // banner.style.backgroundImage = danhSachPhim[i].poster;
            banner.style.backgroundImage = `url('${danhSachPhim[i].poster}')`;
            nam.innerHTML = danhSachPhim[i].namPhatHanh;
            tuoi.innerHTML = 'T'+danhSachPhim[i].tuoi;
            thoiLuong.innerHTML = danhSachPhim[i].thoiLuong+' phút';
            quocGia.innerHTML = 'Quốc Gia '+danhSachPhim[i].quocGia;
            // banner.ariaErrorMessageElements.src = danhSachPhim[i].poster;
            // nam.textContent = danhSachPhim[i].namPhatHanh;
            // document.getElementsByClassName('tuoi').textContent = danhSachPhim[i].tuoi;
            // document.getElementsByClassName('thoiLuong').textContent = danhSachPhim[i].thoiLuong;
            // document.getElementsByClassName('quocGia').textContent = danhSachPhim[i].quocGia;
        }
    }
}
