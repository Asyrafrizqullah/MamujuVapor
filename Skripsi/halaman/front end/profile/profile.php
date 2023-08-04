<!DOCTYPE html>
<html>

<head>
    <title>Card Example</title>
    <script type="text/javascript" src="./js/script.js"></script>
    <style>
        body {
            background-color: default;
        }

        .card {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
        }

        td.label {
            vertical-align: top;
            padding-top: 10px;
            /* Atur jarak antara label dan value */
        }

        td.value {
            vertical-align: top;
            padding-top: 10px;
            /* Atur jarak antara label dan value */
        }

        .email {
            display: flex;
            align-items: center;
        }

        .email-value {
            margin-right: 10px;
        }

        .button-edit,
        .button-save {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .button-save {
            margin-left: 10px;
        }

        .email-input {
            width: 200px;
            margin-right: 10px;
        }

        .email-input-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <section class="card">
        <div class="a">
            <h1 class="title">Profil Saya</h1>
            <div class="description">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</div>
        </div>
        <div class="card">
            <form>
                <table class="table">
                    <tr>
                        <td class="label"><label>Username</label></td>
                        <td class="value">
                            <div class="email">
                                <div class="email-value">Muh Asyraf Rizqullah</div><button class="button-edit">ubah</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><label>Email</label></td>
                        <td class="value">
                            <div class="email">
                                <div class="email-value">asyrafrizqullah01@gmail.com</div>
                                <button class="button-edit">ubah</button>
                                <div class="email-input-container" style="display:none">
                                    <input type="text" class="email-input" value="asyrafrizqullah01@gmail.com">
                                    <button class="button-save">simpan</button>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td class="label"><label>Nomor Telepon</label></td>
                        <td class="value">
                            <div class="phone">
                                <div class="phone-value">082296420613</div><button class="button-edit">ubah</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><label>Jenis Kelamin</label></td>
                        <td class="value">
                            <div class="gender">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Laki-laki</label>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Perempuan</label>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Halaman telah dimuat sepenuhnya');
            const buttonEdit = document.querySelector('.button-edit');
            const buttonSave = document.querySelector('.button-save');
            const emailValue = document.querySelector('.email-value');
            const emailInput = document.querySelector('.email-input');
            const emailInputContainer = document.querySelector('.email-input-container');

            buttonEdit.addEventListener('click', () => {
                emailInput.value = emailValue.innerText;
                emailInputContainer.style.display = 'block';
                emailValue.style.display = 'none';
                buttonEdit.style.display = 'none';
            });

            buttonSave.addEventListener('click', () => {
                emailValue.innerText = emailInput.value;
                emailInputContainer.style.display = 'none';
                emailValue.style.display = 'block';
                buttonEdit.style.display = 'block';
            });
        });
    </script>
</body>
</div>
</div>


</html>