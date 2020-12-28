const servicesList = document.getElementById("services-list");
const servicesSublist = document.getElementById("services-sublist");

const servicesNames = [
    "Οικογενειακό Δίκαιο",
    "Εμπράγματο Δίκαιο - Κτηματολόγιο",
    "Κληρονομικό Δίκαιο",
    "Εμπορικό - Εταιρικό Δίκαιο",
    "Ατυχήματα",
    "Άλλες Υπηρεσίες"
]

const services = [
    [
        "Διαζύγια συναινετικά και κατ’αντιδικία",
        "Διατροφή συζύγου και τέκνων",
        "Επιμέλεια ανηλίκων τέκνων",
        "Επικοινωνία γονέα με τέκνα",
        "Δικαστική Συμπαράσταση"
    ],
    [
        "Αγοραπωλησίες",
        "Διανομή ακινήτων",
        "Έλεγχος τίτλων, βαρών και διεκδικήσεων",
        "Υποβολή δηλώσεων στο Εθνικό Κτηματολόγιο",
        "Αναγνώριση και διεκδίκηση ακινήτων",
        "Αιτήσεις διόρθωσης σφαλμάτων",
        "Προσημείωση και εξάλειψη υποθήκης"
    ],
    [
        "Διαθήκες",
        "Αποδοχές κληρονομιών",
        "Έκδοση κληρονομητηρίων",
        "Αποποιήσεις κληρονομιάς"
    ],
    [
        "Σύσταση, τροποποίηση και λύση εταιρειών",
        "Τροποποιήσεις προσωπικών και κεφαλαιουχικών εταιρειών, παραστάσεις σε Γενικές Συνελεύσεις και σύνταξη πρακτικών, αυξήσεις/μειώσεις κεφαλαίων και ειδικά ζητήματα αυτών",
        "Κατοχύρωση εμπορικών εθνικών και ευρωπαϊκών σημάτων"
    ],
    [
        "Αποζημίωση από τροχαία ατυχήματα, υλικές ζημίες",
        "Αποζημίωση για ψυχική οδύνη"
    ],
    [
        "Μισθώσεις ακινήτων, επαγγελματικών χώρων και κατοικιών",
        "Ιδιωτικές συμβάσεις και αποζημιώσεις από αθέτηση συμβάσεων ή αδικοπραξιών",
        "Διόρθωση ληξιαρχικών πράξεων",
        "Μετάφραση και επικύρωση εγγράφων"
    ]
];

let latin = ["I.", "II.", "III.", "IV.", "V.", "VI.", "VII.", "VIII."];

let choosedService = 3;

document.querySelectorAll(".services-list li").forEach((li, index) => {
    li.addEventListener("click", () => {
        choosedService = index;
        displayServices()
    })
})


function displayServices(){
    document.querySelectorAll(".services-list li").forEach((li) => {
        document.removeEventListener("click", li);
    })

    servicesList.innerHTML = "";
    servicesSublist.innerHTML = "";

    for(let j = 0; j < servicesNames.length; j++){        
        if(j === choosedService){
            servicesList.innerHTML += `<li>${servicesNames[j]} <i class='fas fa-gavel'></i></li>`;
        }else{
            servicesList.innerHTML += `<li>${servicesNames[j]}</li>`;
        }
    }

    for(let j = 0; j < services[choosedService].length; j++){
        servicesSublist.innerHTML += `<li><strong>${latin[j]}</strong> ${services[choosedService][j]}</li>`;
    }

    document.querySelectorAll(".services-list li").forEach((li, index) => {
        li.addEventListener("click", () => {
            choosedService = index;
            displayServices()
        })
    })
}