window.onload = () => {

    function showPicture(){
        let name = document.getElementById("name");
        if(name.value != ""){
            let avatarList = [`https://avatars.dicebear.com/api/miniavs/${name.value}.svg`,
            `https://avatars.dicebear.com/api/bottts/${name.value}.svg`,
            `https://avatars.dicebear.com/api/initials/${name.value}.svg`]
            for(let i=1; i<4; i++){
                document.getElementById(`pic${i}`).src = avatarList[i-1];
                document.getElementById(`input${i}`).value = avatarList[i-1];
            }
        }
    }

    document.getElementById('name').addEventListener('input', showPicture);

}
