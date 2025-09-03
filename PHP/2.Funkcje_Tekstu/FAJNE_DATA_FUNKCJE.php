<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="color: Chocolate; border-color: Chocolate;">
        <legend>Dzisiejsza data</legend>
        <?= date("j-n-Y") ?>
    </fieldset>
    <fieldset style="color: DarkGoldenRod; border-color: DarkGoldenRod;">
        <legend>Data za 100 dni</legend>
        <?= date("j-n-Y", strtotime("+100 day")) ?>
    </fieldset>

    <!-- 
        d 	Day of the month, 2 digits with leading zeros 	01 to 31
        D 	A textual representation of a day, three letters 	Mon through Sun
        j 	Day of the month without leading zeros 	1 to 31
        l (lowercase 'L') 	A full textual representation of the day of the week 	Sunday through Saturday
        N 	ISO 8601 numeric representation of the day of the week 	1 (for Monday) through 7 (for Sunday)
        S 	English ordinal suffix for the day of the month, 2 characters 	st, nd, rd or th. Works well with j
        w 	Numeric representation of the day of the week 	0 (for Sunday) through 6 (for Saturday)
        z 	The day of the year (starting from 0) 	0 through 365
        Month 	--- 	---
        F 	A full textual representation of a month, such as January or March 	January through December
        m 	Numeric representation of a month, with leading zeros 	01 through 12
        M 	A short textual representation of a month, three letters 	Jan through Dec
        n 	Numeric representation of a month, without leading zeros 	1 through 12
        t 	Number of days in the given month 	28 through 31
        Year 	--- 	---
        L 	Whether it's a leap year 	1 if it is a leap year, 0 otherwise.
        Y 	A full numeric representation of a year, at least 4 digits, with - for years BCE. 	Examples: -0055, 0787, 1999, 2003, 10191
        y 	A two digit representation of a year 	Examples: 99 or 03
        Time 	--- 	---
        g 	12-hour format of an hour without leading zeros 	1 through 12
        G 	24-hour format of an hour without leading zeros 	0 through 23
        h 	12-hour format of an hour with leading zeros 	01 through 12
        H 	24-hour format of an hour with leading zeros 	00 through 23
        i 	Minutes with leading zeros 	00 to 59
        s 	Seconds with leading zeros 	00 through 59
    -->
</body>
</html>