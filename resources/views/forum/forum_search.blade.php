<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>

    <link rel="stylesheet" href="./css/forum_search.css">
    <link rel="icon" href="./img/Tripadvisor_logoset_solid_green.svg">

    <script src="https://kit.fontawesome.com/e87c4faa10.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1fc4ea1c6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="searchTitle">
            <h1>Forum Perjalanan Medan</h1>
            <br>
            <hr>
            <br>
        </div>

        <div class="searchContainer">
            <form action="">
                <input type="text" placeholder="Cari Forum">
                <button type="submit">Search</button>
            </form>
        </div>

        <hr>
        <br>

        <div class="searchList">
            <div class="listHeader">
                <h1 class="green">Pembahasan teratas tentang Medan</h1>

                <a href="">
                    Tanya sesuatu
                </a>
            </div>

            <div class="resultTable">
                <table>
                    <tr class="tableHeader">
                        <th class="question">Topik</th>
                        <th class="answer">Balasan</th>
                        <th class="lastDate">Balasan terakhir</th>
                    </tr>

                    @for ($i = 0; $i < 5; $i++)
                        
                    <tr>
                        <td> <a href="forum-detail" class="green">Adakah saran untuk perjalanan di Medan?</a> </td>
                        <td class="answer">1</td>
                        <td class="green lastDate">21 Apr 2023</td>
                    </tr>

                    <tr>
                        <td class="green">Berikan saya saran hotel di Medan</td>
                        <td class="answer">2</td>
                        <td class="green lastDate">12 Feb 2023</td>
                    </tr>

                    <tr>
                        <td class="green">Booking tiket kereta via tiket.com</td>
                        <td class="answer">0</td>
                        <td class="green lastDate">-</td>
                    </tr>

                    @endfor

                </table>
            </div>
        </div>
    </section>
</body>
</html>