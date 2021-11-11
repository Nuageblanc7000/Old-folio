//function loader
const loader = document.querySelector('.loader')
let loaderH4 = loader.querySelector('h4')
let textH4 = loaderH4.innerHTML
    const sizeH4 = textH4.length;
    
    const tabSplitH4 = [];
const loaderStart =()=>{
    let doc = document.documentElement
    doc.style.overflow="hidden"
    const word = textH4.split('');
    for (let i = 0; i < sizeH4; i++) {
     tabSplitH4.push(word[i])   
    }
    loaderH4.innerHTML=""
    let h =-1; 
    let timeText = setInterval(() => {
        h++
        if(h===sizeH4){
            clearInterval(timeText)
            const svgS = document.querySelector('.svgS').classList.add('svgLoader')
            setTimeout(() => {
                loader.classList.add('hidden')
                doc.style.overflowY="visible"
            }, 3000);
        }else{
            loaderH4.innerHTML+=tabSplitH4[h]
        }
    }, 200);
}
loaderStart({once:true});

//script scroll
const profil = document.querySelector('#profil')
const line = profil.querySelector('.line')
const actionScroll =(divDom,action1,addClass)=>{

   let topElement =  divDom.getBoundingClientRect().top

    const {scrollTop} = document.documentElement

    if(scrollTop  >= (scrollTop + topElement).toFixed() ){
        action1.classList.add(`${addClass}`)
        window.removeEventListener('scroll',actionScroll)   
    }

}
window.addEventListener('scroll',()=>actionScroll(profil,line,"lineShow"))



/********** slider*********** */
/*
const comp = document.querySelector('#competences')
console.log(comp)
const sliderSkills = document.querySelector('.sliderSkills')
const skills = sliderSkills.querySelectorAll('.skills')
const nbSlide = skills.length
let time = 4000
let count = 0
let countSecondary = 30
skills.item(0).classList.add('actif')
const changeDiv = ()=>{
    skills.item(count).classList.remove('actif');
if( count < nbSlide - 1){
    count++;
}else{
    count = 0
}
skills.item(count).classList.add('actif'); 
return count
}

    let slideInter = setInterval(()=>{
        changeDiv()
    },time);
    */
/*
const sizeDiv = document.querySelectorAll('.viewSize')
const sizeHead = document.querySelector('.head').clientHeight
console.log(sizeHead)
sizeDiv.forEach(divs =>{
    console.log(divs.clientHeight); 
 divs.style.height =`calc(100vh - (${sizeHead}px +2em))`;
})
console.log(sizeDiv);
*/

//---------------
    const selectCarte = document.querySelectorAll('.flip-card-inner')
    const carte = document.querySelectorAll('.carte')
    const flipCard = (card,Toggle,element,...elem)=>{
        card.forEach((event,key)=>{

        event.addEventListener('click',()=>{
        Toggle.item(key).classList.toggle(element)
    })
    })
     }
flipCard(carte,selectCarte,'go')
//test
const input = document.querySelectorAll('#contact form input')
const label = document.querySelectorAll('#contact label')
const textArea = document.querySelector('#contact form textarea')
const areaLabel = document.querySelector('#area')
textArea.value=""

 input.forEach((inputs,key) =>{
    // verifInput(inputs)
    inputs.addEventListener('focus',(e)=>{
        label.item(key).classList.add('inputsInnerit')
        e.stopPropagation()
    })

    inputs.addEventListener('blur',(e)=>{
        if(inputs.value ==""){
        label.item(key).classList.remove('inputsInnerit')
        e.stopPropagation()
    }
    })
 })

 textArea.addEventListener('focus',(e)=>{
    textArea.classList.add('textInnerit')
    areaLabel.classList.add('inputsInnerit')
    e.stopPropagation()
 })

 textArea.addEventListener('blur',(e)=>{
     if(textArea.value == ""){
     areaLabel.classList.remove('inputsInnerit')
        textArea.classList.remove('textInnerit')
    }
    e.stopPropagation()
 })

 //burger
 const openNav = document.querySelector('.bgNav')
 const burgerOn = document.querySelector('.burgerOff')

 openNav.addEventListener('click',()=>{
    if(burgerOn.classList.contains('burgerOn')){ 
        burgerOn.classList.remove('burgerOn')
    }else{
        burgerOn.classList.add('burgerOn')
    }
 })

 window.addEventListener('scroll',()=>{
   if(burgerOn.classList.contains('burgerOn')){ 
        burgerOn.classList.remove('burgerOn')
    }
 })

 //verification form
 const regexMail = new RegExp(/^[a-zA-Z]+[a-zA-Z0-9.-]?\w+@{1,1}?\w{3,5}\.\w{2,6}$/)
 const regexInput = new RegExp(/^[a-zA-Z]+\w+/)
 const forms = document.querySelector("#contact form")
 console.log(forms)
forms.addEventListener('submit',(e)=>{
    input.forEach((inputs,keys) =>{
        if(inputs.name==="mail"){
            verifRegex(inputs,e,keys)
        }else{
            verifInputs(inputs,e,keys)
            verifInputs(textArea,e,3)
        }
    })
})

const formTrue=(t)=>{
    t.classList.remove('inputsError')
}
const formFalse=(f)=>{
    f.classList.add('inputsError')
}


 const verifInputs =(inputs,e,keys)=>{
    if(!inputs.value){
        formFalse(label.item(keys))
        e.preventDefault()
     }else{

        formTrue(label.item(keys))
     }
 
 }
 const verifRegex=(inputs,e,keys)=>{
    if(inputs.value.match(regexMail)){
        inputs.value.replace(/^\s+|\s+$|\s+(?=\s)/g, "");
        formTrue(label.item(keys))
    }else{
        formFalse(label.item(keys))
        e.preventDefault()
    }
}