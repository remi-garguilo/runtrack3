document.addEventListener('DOMContentLoaded', (event) => {

    const strJSON = '{"name": "La Plateforme_", "address": "8 rue d\'hozier", "city": "Marseille", "nb_staff": "11", "creation": "2019"}';

    function jsonValueKey(strJSON, key) {
        const obj = JSON.parse(strJSON)
        console.log(obj[key])
    }
    jsonValueKey(strJSON, 'name')
})