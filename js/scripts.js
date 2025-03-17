const host = window.location.protocol + "//" + window.location.host + "/public/"
const page_name = [
    ["Главная", host],
    ["Диджитал", host + "Digital.php"],
    ["Традишион", host + "Tradition.php"],
    ["Автор", host + "Author.php"]
]

const navigation = document.getElementById('nav');
const this_link = window.location.href
const output_link = page_name.map((i) => {

    if (this_link === i[1]) {
        return ('<a href=" ' + i[1] + ' " class="activePage">' + i[0] + '</a>')
    } else {
        return ('<a href=" ' + i[1] + ' " >' + i[0] + '</a>')
    }

})

document.getElementById('nav').innerHTML = output_link
