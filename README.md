Užduotis <br>
Reikalinga suprogramuoti TVS sistemą su minimaliomis funkcijomis:<br>
● Galimybė svetainės lankytojui (prisijungusiam) patalpinti puslapį. Puslapio formos laukeliai: Antraštė, įkeliama nuotrauka, autorius, puslapio tekstas.<br>
● Nuotraukos optimizavimui panaudoti eilę (queue).<br>
● Galimybė sistemos pradiniame puslapyje peržiūrėti visus paskutinius patalpintus puslapius (rūšiuoti nuo naujausiai įkelto iki seniausio, rodoma puslapio sukūrimo data ir antraštė).<br>
● Galimybė patekti į patalpintą puslapį kuriame pateikiama visa patalpinta informacija (įskaitant sukūrimo datą).<br>
● Pradiniame puslapyje turi matytis tos dienos valiutų kursai (EUR/USD/GBP/RUB). Naudoti https://exchangeratesapi.io/ (sujungimas per backend).<br>
● Sistemą reikia sukurti panaudojant Laravel PHP framework’a.<br>
● Sistemos dizainui nereikia skirti daug dėmesio, privalumas jei sistemos front-end bus išspręstas su Bootstrap/Foundation ar kitu CSS framework’u, taip pat privalumas SASS/LESS paremtas CSS formavimas.<br>

Prieš paleisdami projektą sukonfigūruokite queue ir chace. Aš abiem atvejais naudojau duombazę.

Pradiniame puslapyje galite pamatyti valiutų kursus kurie yra talpinami į "cache" ir galioja 10 minučių.
Straipsniai rodomi nuo naujausio iki seniausio.
Prisijungęs vartotojas gali sukurti straipsnį ir įkelti nunotrauką.
Nuotrauka apdorojoma (keičiamas jos dydis) naudojant "queue", kol nuotrauka neapdarota lankytojai mato užrašą, jog nuotrauka yra apdorojama, jei nuotrauka jau apdorota lankytojai mato pateiktą nuotrauką.
