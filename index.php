<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div style="max-width: 420px; margin: 40px auto; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.15);">

    <h2 style="text-align: center; margin-bottom: 30px;">Регистрация</h2>

    <form action="action.php" method="post">

        <label>Имя:</label>
        <input type="text" name="name" placeholder="Введите имя" required>

        <label>Почта:</label>
        <input type="email" name="email" placeholder="name@example.ru" required>

        <label>Пароль:</label>
        <input type="password" name="password" placeholder="Введите пароль" required>

        <label>Подтвердите пароль:</label>
        <input type="password" name="password_confirm" placeholder="Повторите пароль" required>

        <label>Пол:</label>
        <select name="gender" required>
            <option value="" disabled selected>Выберите пол</option>
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
            <option value="other">Другой</option>
        </select>

        <label style="margin: 20px 0; display: flex; align-items: center; gap: 10px; font-size: 0.95em;">
            <input type="checkbox" name="agree" required>
            Создавая учётную запись, вы соглашаетесь с нашим<br>Условиями и конфиденциальностью
        </label>

        <input type="submit" value="Зарегистрироваться" style="background: #495057; color: white; padding: 14px; border: none; border-radius: 6px; width: 100%; font-size: 1.1em; cursor: pointer;">
    </form>

</div>

</body>
</html>

