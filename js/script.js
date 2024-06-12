const onformHover = () => {
    console.log('hovered')
    if (document.querySelector('.overlay') !== null) {
        document.querySelector('.overlay').style.opacity = "50%"
    }
    if (document.querySelector('.overlay-right') !== null) {
        document.querySelector('.overlay-right').style.opacity = "50%"
    }
}
const onformLeave = () => {
    console.log('left')
    if (document.querySelector('.overlay') !== null) {
        document.querySelector('.overlay').style.opacity = "0"
    }
    if (document.querySelector('.overlay-right') !== null) {
        document.querySelector('.overlay-right').style.opacity = "0"
    }
}