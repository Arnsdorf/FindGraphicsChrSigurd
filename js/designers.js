export default class Designers{
    constructor() {
        this.data = {
            password: "TCS",

        }

        this.rootElem = document.querySelector('.designers');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
        this.genreSearch = this.filter.querySelector('.genreSearch');
    }

    async init(){

        this.nameSearch.addEventListener('input', () =>{
            this.render();
        });

        this.genreSearch.addEventListener('input', () =>{
            this.render();
        });


        await this.render();
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4')

        for (const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-3', 'col-xs-6');

            col.innerHTML = `
                <div class="card image shadow">
                    <img src="uploads/${item.mmdKundeProfilPic}" class="card-img card-img-top">
                    <div class="card-img-overlay card-content">
                        <a href="mmdKundeProfil.php?mmdKundeId=${item.mmdKundeId}" class="stretched-link"></a>
                        <h4 class="card-title text-center position-relative text-white kort_title1">${item.mmdKundeNavn} ${item.mmdKundeEfternavn}</h4>
                        <p class="kort_undertitle1 text-center text-white position-relative ">${item.mmdKundeTitel}</p>
                        
                       <div class="d-flex justify-content-evenly">
                            <span class="text-dark pt-1 pb-1 m-1 tag2 position-relative text-center"></i><span><i class="bi bi-circle-fill text-purple cirkle1"></i></span>${item.mmdKundeTag3}</span>
                       </div>
                        
                        <div class="d-flex justify-content-between">
                            <span class="text-dark pt-1 pb-1 m-1 tag2 position-relative text-center"></i><span><i class="bi bi-circle-fill text-blue cirkle1"></i></span>${item.mmdKundeTag1}</span>
                            <span class="text-dark pt-1 pb-1 m-1 tag2 position-relative text-center"></i><span><i class="bi bi-circle-fill text-success pe-auto cirkle1"></i></span>${item.mmdKundeTag2}</span>
                        </div>
                    </div>
                </div>
                    
            `;

            row.appendChild(col);
        }
        this.items.innerHTML = '';
        this.items.appendChild(row);
    }

    async getData(){
        this.data.nameSearch = this.nameSearch.value;
        this.data.genreSearch = this.genreSearch.value;

        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }

}