@extends('layouts.main')
@section('container')


<h1><b>FAQ</b></h1>
<div class="container container-title text-start">
    <div class="row background p-3">
        <div class="col-12 pb-3" >
            <h2 class="fs-4 fw-bold text-start text-uppercase">
                <ul>
                    <li onclick="toggleApply()" style="cursor: pointer;"> Apa itu The Paws?</li>
                </ul>
            </h2>
            <p align="justify" class="ms-4" id="apply" style="display: none;">
            The Paws🐾 merupakan aplikasi untuk mengedukasi masyarakat umum, terutama pemilik hewan khususnya anjing, dan kucing untuk mengetahui bagaimana cara memberikan pertolongan pertama ketika peliharaannya terjatuh sakit.
            </p>
        </div>
        <div class="col-12 pb-3">
            <h2 class="fs-4 fw-bold text-start text-uppercase">
                <ul>
                    <li onclick="toggleMany()" style="cursor: pointer;">Produk apa yang direkomendasikan untuk peliharaan yang sakit? </li>
                </ul>
            </h2>
            <p align="justify" class="ms-4" id="many" style="display: none;">
            Anda dapat mengunjungi halaman blogs kami untuk menemukan solusi yang tepat. Namun
            jika hewan peliharaan Anda sedang sakit dengan kondisi khusus, mohon mengunjungi dokter hewan untuk diperiksa secara langsung.
            </p>
        </div>
        <div class="col-12 pb-3">
            <h2 class="fs-4 fw-bold text-start text-uppercase">
                <ul>
                    <li onclick="toggleBenefits()" style="cursor: pointer;">Bagaimana gejala awal yang dialami kucing ketika sakit? </li>
                </ul>
            </h2>
            <p align="justify" class="ms-4" id="benefits" style="display: none;">
                Gejala awal nya dapat dilihat dari bagaimana nafsu makan sang kucing. Jika biasanya kucing makan dengan mudah, biasanya saat sakit kucing akan sulit untuk diberi makan dan cenderung lesu.
        </div>
        <div class="col-12 pb-3">
            <h2 class="fs-4 fw-bold text-start text-uppercase">
                <ul>
                    <li onclick="toggleFree()" style="cursor: pointer;">Bagaimana cara hewan peliharaan saya bertransisi ke makanan yang baru? </li>
                </ul>
            </h2>
            <p align="justify" class="ms-4" id="free" style="display: none;">
            Anjing dan terutama kucing bisa menolak makanan hewan yang baru. Setidaknya tujuh hingga sepuluh hari dibutuhkan untuk transisinya. Perubahan yang mendadak dapat menyebabkan diare atau gas.
            Untuk melakukan transisi, makanan baru dapat dicampur ke makanan lama dalam jumlah yang bertambah seiring waktu. 
            </p>
        </div>
    </div>
</div>

<script>
    function toggleApply() {
        var apply = document.getElementById("apply");

        if (apply.style.display === "none") {
            apply.style.display = "block";
        } else {
            apply.style.display = "none";
        }
    }

    function toggleMany() {
        var many = document.getElementById("many");

        if (many.style.display === "none") {
            many.style.display = "block";
        } else {
            many.style.display = "none";
        }
    }

    function toggleBenefits() {
        var benefits = document.getElementById("benefits");

        if (benefits.style.display === "none") {
            benefits.style.display = "block";
        } else {
            benefits.style.display = "none";
        }
    }

    function toggleFree() {
        var free = document.getElementById("free");

        if (free.style.display === "none") {
            free.style.display = "block";
        } else {
            free.style.display = "none";
        }
    }
</script>
@endsection