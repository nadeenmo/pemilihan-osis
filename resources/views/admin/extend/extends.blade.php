<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/extend.css','public/js/scripts.js'])
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>
</head>

<body>
    <div class="container">
        <aside class="sidebar" id="sidebar">
            <div class="top">
                <div class="logo">
                    <img src="img/Logo.png">    
                </div>
            </div>
            <div class="horizontal-line"></div>

            <ul>
                <li><a href="dashboard"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAPpJREFUSEvtVksOgjAQfdN4EJY9htyErRL3yEbYCHtDXOpN5Bjd2ZO0BlDCRw1gE0jsrKfvzbxOp48wU9BMvFge8SngaxNqrAC5SYXsYvU6zkLuQeMAwDFBDECCEPtHcW3i9Yn3XBsibMJIpuE2O28RF/Iywq08QYiVQv5LEYzBgcalwFAa7i4VNd5H4m7ilAKajVhiK3U91Xa47HMaooBdIMvb1eeAO4pwH3J/Y3P8RLS2ZP8/DvgFBG8s8Ld8AvJtIty3RqCcQIbK7lQOxFwQ4vJPVshf91x3nIU8Mk7YN1qFBYoqn/GM2YjN6ToMaXm+eljd07P+r+MHve70H91rN8kAAAAASUVORK5CYII="/><span class="title">Beranda</span></a></li>
                <li><a href="kandidat"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAX1JREFUSEvNlj1ywjAQhZ90Euh0i+CbQJl40gNNoAH3GZIS5yTALdRFuUdGm5ED+fGPeM4oA2ot77fvabUrhQstdSEu/gR+npqB1xgDcN7D3Rd231dAL3AAisJWgFEN5LQguy2sYxOgwY9TM9IKu0hg5wUTVj0NfpqZXYvSeh4uX9sho5oCb+ZmDMGWCegFGaOaBS8geGDAUFjmK7s4tzc9WFDmhZ0kAROF9c1RmOQrWyYBV/dW4fVcsPBdC4bMtaKsDgGZAmMLK8SjwUd4d5GRRXVyrRc4/HRslyN43FRBNN60R8nY+/OoeoOZc2b2XDf4y15goORocU2WCBw0Duy0iiqOTKO4m4JSA8vYuXeCezWN9jQcFF662mcrOAH0lErnqGwFkyOQKd6wp3VUNsCbueEnEYtu6d9N8NRsoar3VLKlgP3d2mbRBrKZmTAMBsmon4EadjcVz4wkhlbh6gPkFzhhNTdyj4JDw3hPb3OVRP0ddt29+j/O/GKKPwAJrqUf3qDIYQAAAABJRU5ErkJggg=="/><span class="title">Data Kandidat</span></a></li>
                <li><a href="pemilih"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAATFJREFUSEvtljGOwjAQRb+tPQh0PgbcBMpVtH2ggW1C+lW0JbkJewx35CQxcoQjx5lYWccCIZJ6Jm/+aGb8GZ70sSdx4QUXe7EBsAgtjtcoP3NZUfkk+DcVi5rhGgq08iqusKbgPXBEqOGT8A64B1Uok1xuQ5QXe3GEwuGe24O3YEopA/5CoCZHAauhtrdgp8IpvOFchm2SyVIHkOCpSl1yq5zhO8nkcRCcnGTU/S52QjXFzGDdBXu47FY3086hLxh8l8gXF9Tqn1SsOMNFg2uF9VcuyRXzxb0ueOxyu52ZrPihYHtoxoLdIQxSPBbmi5vB861uHYPewxhDZf5hLh/5OtknLybU/hdXWBrj13l3i1ScwRq7EmxpB4t2/Bv54Gv1MVV/AJVrcaM6jf8U+37gG81TIi5M40jwAAAAAElFTkSuQmCC"/><span class="title">Data Pemilih</span></a></li>
                <li><a href="akses"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAZxJREFUSEvtlj1uhDAQhZ85yW7HMeAmS5mg9GyaZJtAH6GUkJNkj+Euzj0iHBnjlW3Mn420TegAy5/fzJsZE9zpIXfiYlfwRxEfughJ14E9VfQ6JyoYPMBO4HixQIwAjHBkDxVl9iGCwO9FnEQEXwvpYiC45G+01dd5g3ulBN8OqFB3sNVHHKmu3BtcF3EDgtMNIFW9indX+AlwfSxpqtb7g88xN1RpYPW9fo5F7pvhneUlPQaBJ3Nrwe10dBypcruX4llTWfD6HAsfyJwTZMpkXuAZY8lIavBaS0nEcVQG8wKvKiOCS38Irb7zkt54m8FCLSdoOJBsarccbV7RzMtc3lDAcLTMxsonBNpxZHbvXgX2hIpW+amayuZevRLKREsUm/8OpRM0nRahHC0i/Eyp8hqLi1CHYVbaZSh1x+oVUFGfRnlsgTpdvQiVjYHZ8zUYPBp31o5629sK09ePyslo6ubO/VVGn6l7g805K/ttUD5dB3QpHoH3Cu9kqIdxJy5v6s7kvKiFhHhySAi4+Om6ku4B9JpO/+CQCPwB+9HPHxi/eHUAAAAASUVORK5CYII="/><span class="title">Akses</span></a></li>
                <li><a href="suara"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlkFOwkAUhv9Xj6AHwJXDwjvAOSSxbky0LjDRWNgAG+rSBKtL1Og55AxunJ2chGeGdErbtKQMA2VBl9PJ++Z/8/fvI1T0UEVc7MFb63yq1SNfNA4IPQYaNk9AwIQJ795Qvum6MfjVF7UZ4c8mMFvLYRxfPcqpWo/BYVf0wejNNxMGVg+wqHuhVeeCvUBadXvYEawFeUPZL1S8U+DnTr1N4DsARwA+vEBelr0OY8WjB3HqOPhJghh0exP8Pqm1sCtcYpyn3idcbAwO/ZMzEH1mFH55gWxF4IUxF9/LQN+nMbgyxUrES6feZvA9gMOt3XFZExXtM261No+OUh2BzgwTnUQq+Zgw1vBkRBqBQ1+MQXAL1EwdRlPBVc47hO94H8HcXKXyOwLoH4wVxan8LpCs2n4dyOYyHxi1el1jzb/zXc1qFxy5cnO/xdhw2UFAubJmo715NXIHAR320TBgFb509NmUyqK6VieNVQ6/B6/SrbX2/gMxrhwuv9r1AwAAAABJRU5ErkJggg=="/><span class="title">Hasil Suara</span></a></li>
                <li><a href="{!!route('logout')!!}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAfJJREFUSEvllkFSwjAUhv9kPEjZ9RbASaRL7bgHNsBG2DvoEjwJ9Rbd2YNo47zQMK9p2qTWkXFk25Dv/X/e+xOBK/3Elbj4e+CXeRyRWx9AdAMUd7u86ONeL8UEKyVmULgFoMHsVwigUAKv6WN+9BURBGbAlW/D6nuBcwHrtvVesIYKnCyFemPatCyRSYkIJcYQmNVAAps2uBe8X8Zk7cEoKRWSh12euZQ4nWmBe8EE0HAg6rKOF2K5VLiKDQIHnmttWQV/N06l23zEF3SCjXWhSu0Ca8ekcEx3eWLWtIKf5vFECpwEkN1v8+l3VNN/nhfxSQETAAVX7QTzSoeC98t4DQUaw27wfh4f+FgQ+FNhE6rY7njjnB49han5flFM56kEDpUtoZzGunSb11ysNRkbrRrYERS9C7DBehwXsdIbCSQmTpvVnbOYR6Oew9AKbKt5v0iFkblM2prLNATdm4O6mjUXuBut42TSh26cnxgnW4A/QIAVH/xQyy9Ra3LeyuxfiUzXcQWB9SxKTEKj0x5NPr/eyDQLeABQ+kiFadczhzdTNULOO9mr2BEs57eVQgaJt7JEQW4IhXEjfIY8BIzyhpKOLqMzFQpJlzNexY0LXmLmVAdcnkMhvdALbIukY6DnbdtTqGv0BoH7zLS99v+BvwBW2AguE1fHkAAAAABJRU5ErkJggg=="/><span class="title">Log Out</span></a></li>
            </ul>
            
        </aside>
        <main class="main-content">
            <div class="row">
                <i class="bi bi-list" id="toggleButton">
                <span class="title">@yield('title')</span></i>
                <p>Halo, admin!</p>
            </div>
            @yield('content')
        </main>
    </div>
    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('open'); // Tambahkan atau hapus kelas 'open'
});
    </script>
</body>

<footer>
    @yield('footer')
</footer>
</html>