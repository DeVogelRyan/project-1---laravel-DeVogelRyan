window.onload = () => {


    function showPicture(){
        let name = document.getElementById("name");
        if(name.value != ""){
            let avatarList = [`https://avatars.dicebear.com/api/miniavs/${name.value}.svg`,
            `https://avatars.dicebear.com/api/bottts/${name.value}.svg`,
            `https://avatars.dicebear.com/api/initials/${name.value}.svg`]
            let pictures = document.getElementsByTagName("img");
            let i=0;
            for(let img of pictures){
                img.src = avatarList[i];
                document.getElementById(`pic${i+1}`).value = avatarList[i];
                i++;
            }
        }
    }

    document.getElementById('name').addEventListener('input', showPicture);

}
