<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* search/new.html.twig */
class __TwigTemplate_f43a589b78f4cf47b036a7e208916e73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/new.html.twig"));

        // line 1
        yield "<div class=\"flex items-center justify-center min-h-screen bg-gray-100\">
    <div class=\"p-6 rounded-lg shadow-lg w-full max-w-lg bg-white\">       
        <form id=\"searchForm\" class=\"mb-4\">
            <label for=\"search_searchField\" class=\"sr-only\">Recherche :</label>
            <input type=\"text\" id=\"search_searchField\" name=\"searchField\" placeholder=\"Recherche\" class=\"w-full bg-gray-200 focus:outline-none focus:ring focus:border-blue-300 border border-gray-300 rounded-lg py-2 px-4\">
        </form>

        <div class=\"flex items-center justify-between\">
            <button id=\"clearSearchFieldButton\" class=\"bg-red-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\" disabled>Effacer la recherche</button>
            <button class=\"bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\" id=\"filterButton\">Filtres <span id=\"filterCount\">0</span></button>
            <button id=\"clearFiltersButton\" class=\"bg-red-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\" disabled>Effacer tous les filtres</button>
        </div>

        <div id=\"filterOptions\" class=\"hidden mt-4 border-t border-gray-300 pt-4\">
            <div class=\"mb-4\">
                <h3 class=\"text-lg font-semibold mb-2\">Spécialités :</h3>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"speciality\" value=\"generaliste\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Généraliste</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"speciality\" value=\"dentiste\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Dentiste</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"speciality\" value=\"oftalmologue\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Ophtalmologue</span>
                    </label>
                </div>
            </div>
            
            <div class=\"mb-4\">
                <h3 class=\"text-lg font-semibold mb-2\">Moyen de paiement :</h3>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"espece\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Espèce</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"cheque\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Chèque</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"carte_bancaire\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Carte bancaire</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"paypal\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Paypal</span>
                    </label>
                </div>
            </div>
            
            <div class=\"mb-4\">
                <h3 class=\"text-lg font-semibold mb-2\">Je veux être soigné par :</h3>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"gender\" value=\"homme\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Homme</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"gender\" value=\"femme\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Femme</span>
                    </label>
                </div>
            </div>

            <button id=\"applyButton\" class=\"bg-green-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\">Appliquer</button>
        </div>
    </div>
</div>
<div id=\"filter\"></div>
<div id=\"searchResultsContainer\" class=\"container mx-auto py-8\"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var searchField = document.getElementById('search_searchField');
    var searchResultsContainer = document.getElementById('searchResultsContainer');
    var searchForm = document.getElementById('searchForm');
    var actionUrl = \"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_show");
        yield "\";
    var specialityShowBaseUrl = \"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_speciality_show", ["id" => 0]);
        yield "\";
    specialityShowBaseUrl = specialityShowBaseUrl.replace(/0\$/, '');

    var filterButton = document.getElementById('filterButton');
    var filterOptions = document.getElementById('filterOptions');
    var filterCount = document.getElementById('filterCount');
    var applyButton = document.getElementById('applyButton');
    var filterDisplay = document.getElementById('filter');
    var clearFiltersButton = document.getElementById('clearFiltersButton');
    var clearSearchFieldButton = document.getElementById('clearSearchFieldButton');
    var appliedFilters = [];

    // Fonction pour mettre à jour l'état du bouton \"Filtres\"
    function updateFilterButton() {
        if (filterOptions.classList.contains('hidden')) {
            filterButton.textContent = \"Ouvrir les filtres\";
        } else {
            filterButton.textContent = \"Fermer les filtres\";
        }
    }

    // Fonction pour mettre à jour le nombre de filtres appliqués
    function updateFilterCount() {
        if (appliedFilters.length === 0) {
            filterCount.textContent = \"Aucun filtre appliqué\";
            clearFiltersButton.disabled = true;
        } else {
            filterCount.textContent = appliedFilters.length + \" filtres appliqués\";
            clearFiltersButton.disabled = false;
        }
        filterDisplay.textContent = filterCount.textContent;
    }

    // Fonction pour appliquer les filtres
    function applyFilters() {
        appliedFilters = [];
        var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
        checkboxes.forEach(function(checkbox) {
            appliedFilters.push(checkbox.value);
        });
        updateFilterCount();
        
        // Activer ou désactiver le bouton \"Appliquer\" en fonction de l'état des filtres
        applyButton.disabled = appliedFilters.length === 0;
    }

    // Fonction pour effacer tous les filtres
    function clearFilters() {
        var checkboxes = document.querySelectorAll('input[type=checkbox]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = false;
        });
        applyFilters();
    }

    // Ajouter un écouteur sur les cases à cocher pour appliquer les filtres
    var filterCheckboxes = document.querySelectorAll('input[type=checkbox]');
    filterCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', applyFilters);
    });

    // Ajouter un écouteur sur le bouton \"Appliquer\" pour appliquer les filtres
    applyButton.addEventListener('click', function() {
        applyFilters();
        filterOptions.classList.add('hidden');
        updateFilterButton();
    });

    // Ajouter un écouteur sur le bouton \"Effacer tous les filtres\" pour effacer les filtres
    clearFiltersButton.addEventListener('click', function() {
        clearFilters();
    });

    // Ajouter un écouteur sur le bouton \"Filtres\" pour ouvrir ou fermer les filtres
    filterButton.addEventListener('click', function() {
        filterOptions.classList.toggle('hidden');
        updateFilterButton();
    });

    // Ajouter un écouteur sur le champ de recherche
    searchField.addEventListener('input', function() {
        var searchTerm = searchField.value;

        if (searchTerm.length >= 4) {
            fetch(actionUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    searchField: searchTerm,
                    filters: appliedFilters // Ajout des filtres
                }),
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.error || 'Erreur inconnue')
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.length === 0) {
                    searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Aucun résultat trouvé.</h2>';
                } else {
                    searchResultsContainer.innerHTML = '<h2 class=\"text-center text-red-500\">Résultats de la recherche :</h2>' +
                        data.map(item => `<a href=\"\${specialityShowBaseUrl}\${item.id}\">\${item.name}</a>`).join('');
                }
            })
            .catch(error => {
                searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: ' + error.message + '</h2>';
            });
        } else if (searchTerm.length === 0) {
            searchResultsContainer.innerHTML = '';
        } else {
            searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Le terme de recherche doit comporter au moins 4 caractères.</h2>';
        }

        // Mettre à jour l'état du bouton \"Effacer la recherche\"
        updateClearSearchButton();
    });

    // Ajouter un écouteur sur le formulaire pour bloquer la soumission si la validation échoue
    searchForm.addEventListener('submit', function(event) {
        var searchTerm = searchField.value;
        if (searchTerm.length < 4) {
            event.preventDefault(); // Bloquer la soumission du formulaire
            searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Le terme de recherche doit comporter au moins 4 caractères.</h2>';
        }
    });

    // Ajouter un écouteur sur le bouton \"Effacer la recherche\" pour effacer le champ de recherche
    clearSearchFieldButton.addEventListener('click', function() {
        searchField.value = '';
        searchResultsContainer.innerHTML = '';
        updateClearSearchButton();
    });

    // Fonction pour mettre à jour l'état du bouton \"Effacer la recherche\"
    function updateClearSearchButton() {
        clearSearchFieldButton.disabled = searchField.value.length <= 2;
    }

    // Mettre à jour l'état initial du bouton \"Filtres\"
    updateFilterButton();

    // Rendre le bouton \"Appliquer\" initialement indisponible
    applyButton.disabled = true;

    // Mettre à jour le nombre de filtres appliqués
    updateFilterCount();
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "search/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  142 => 94,  138 => 93,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex items-center justify-center min-h-screen bg-gray-100\">
    <div class=\"p-6 rounded-lg shadow-lg w-full max-w-lg bg-white\">       
        <form id=\"searchForm\" class=\"mb-4\">
            <label for=\"search_searchField\" class=\"sr-only\">Recherche :</label>
            <input type=\"text\" id=\"search_searchField\" name=\"searchField\" placeholder=\"Recherche\" class=\"w-full bg-gray-200 focus:outline-none focus:ring focus:border-blue-300 border border-gray-300 rounded-lg py-2 px-4\">
        </form>

        <div class=\"flex items-center justify-between\">
            <button id=\"clearSearchFieldButton\" class=\"bg-red-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\" disabled>Effacer la recherche</button>
            <button class=\"bg-blue-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\" id=\"filterButton\">Filtres <span id=\"filterCount\">0</span></button>
            <button id=\"clearFiltersButton\" class=\"bg-red-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\" disabled>Effacer tous les filtres</button>
        </div>

        <div id=\"filterOptions\" class=\"hidden mt-4 border-t border-gray-300 pt-4\">
            <div class=\"mb-4\">
                <h3 class=\"text-lg font-semibold mb-2\">Spécialités :</h3>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"speciality\" value=\"generaliste\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Généraliste</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"speciality\" value=\"dentiste\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Dentiste</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"speciality\" value=\"oftalmologue\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Ophtalmologue</span>
                    </label>
                </div>
            </div>
            
            <div class=\"mb-4\">
                <h3 class=\"text-lg font-semibold mb-2\">Moyen de paiement :</h3>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"espece\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Espèce</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"cheque\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Chèque</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"carte_bancaire\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Carte bancaire</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"payment\" value=\"paypal\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Paypal</span>
                    </label>
                </div>
            </div>
            
            <div class=\"mb-4\">
                <h3 class=\"text-lg font-semibold mb-2\">Je veux être soigné par :</h3>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"gender\" value=\"homme\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Homme</span>
                    </label>
                </div>
                <div>
                    <label class=\"inline-flex items-center\">
                        <input type=\"checkbox\" name=\"gender\" value=\"femme\" class=\"form-checkbox text-blue-500\">
                        <span class=\"ml-2\">Femme</span>
                    </label>
                </div>
            </div>

            <button id=\"applyButton\" class=\"bg-green-500 text-white py-2 px-4 rounded-lg shadow-md focus:outline-none\">Appliquer</button>
        </div>
    </div>
</div>
<div id=\"filter\"></div>
<div id=\"searchResultsContainer\" class=\"container mx-auto py-8\"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var searchField = document.getElementById('search_searchField');
    var searchResultsContainer = document.getElementById('searchResultsContainer');
    var searchForm = document.getElementById('searchForm');
    var actionUrl = \"{{ path('app_search_show') }}\";
    var specialityShowBaseUrl = \"{{ path('app_speciality_show', { 'id': 0 }) }}\";
    specialityShowBaseUrl = specialityShowBaseUrl.replace(/0\$/, '');

    var filterButton = document.getElementById('filterButton');
    var filterOptions = document.getElementById('filterOptions');
    var filterCount = document.getElementById('filterCount');
    var applyButton = document.getElementById('applyButton');
    var filterDisplay = document.getElementById('filter');
    var clearFiltersButton = document.getElementById('clearFiltersButton');
    var clearSearchFieldButton = document.getElementById('clearSearchFieldButton');
    var appliedFilters = [];

    // Fonction pour mettre à jour l'état du bouton \"Filtres\"
    function updateFilterButton() {
        if (filterOptions.classList.contains('hidden')) {
            filterButton.textContent = \"Ouvrir les filtres\";
        } else {
            filterButton.textContent = \"Fermer les filtres\";
        }
    }

    // Fonction pour mettre à jour le nombre de filtres appliqués
    function updateFilterCount() {
        if (appliedFilters.length === 0) {
            filterCount.textContent = \"Aucun filtre appliqué\";
            clearFiltersButton.disabled = true;
        } else {
            filterCount.textContent = appliedFilters.length + \" filtres appliqués\";
            clearFiltersButton.disabled = false;
        }
        filterDisplay.textContent = filterCount.textContent;
    }

    // Fonction pour appliquer les filtres
    function applyFilters() {
        appliedFilters = [];
        var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
        checkboxes.forEach(function(checkbox) {
            appliedFilters.push(checkbox.value);
        });
        updateFilterCount();
        
        // Activer ou désactiver le bouton \"Appliquer\" en fonction de l'état des filtres
        applyButton.disabled = appliedFilters.length === 0;
    }

    // Fonction pour effacer tous les filtres
    function clearFilters() {
        var checkboxes = document.querySelectorAll('input[type=checkbox]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = false;
        });
        applyFilters();
    }

    // Ajouter un écouteur sur les cases à cocher pour appliquer les filtres
    var filterCheckboxes = document.querySelectorAll('input[type=checkbox]');
    filterCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', applyFilters);
    });

    // Ajouter un écouteur sur le bouton \"Appliquer\" pour appliquer les filtres
    applyButton.addEventListener('click', function() {
        applyFilters();
        filterOptions.classList.add('hidden');
        updateFilterButton();
    });

    // Ajouter un écouteur sur le bouton \"Effacer tous les filtres\" pour effacer les filtres
    clearFiltersButton.addEventListener('click', function() {
        clearFilters();
    });

    // Ajouter un écouteur sur le bouton \"Filtres\" pour ouvrir ou fermer les filtres
    filterButton.addEventListener('click', function() {
        filterOptions.classList.toggle('hidden');
        updateFilterButton();
    });

    // Ajouter un écouteur sur le champ de recherche
    searchField.addEventListener('input', function() {
        var searchTerm = searchField.value;

        if (searchTerm.length >= 4) {
            fetch(actionUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    searchField: searchTerm,
                    filters: appliedFilters // Ajout des filtres
                }),
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw new Error(data.error || 'Erreur inconnue')
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.length === 0) {
                    searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Aucun résultat trouvé.</h2>';
                } else {
                    searchResultsContainer.innerHTML = '<h2 class=\"text-center text-red-500\">Résultats de la recherche :</h2>' +
                        data.map(item => `<a href=\"\${specialityShowBaseUrl}\${item.id}\">\${item.name}</a>`).join('');
                }
            })
            .catch(error => {
                searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: ' + error.message + '</h2>';
            });
        } else if (searchTerm.length === 0) {
            searchResultsContainer.innerHTML = '';
        } else {
            searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Le terme de recherche doit comporter au moins 4 caractères.</h2>';
        }

        // Mettre à jour l'état du bouton \"Effacer la recherche\"
        updateClearSearchButton();
    });

    // Ajouter un écouteur sur le formulaire pour bloquer la soumission si la validation échoue
    searchForm.addEventListener('submit', function(event) {
        var searchTerm = searchField.value;
        if (searchTerm.length < 4) {
            event.preventDefault(); // Bloquer la soumission du formulaire
            searchResultsContainer.innerHTML = '<h2 class=\"text-red-500\">Erreur: Le terme de recherche doit comporter au moins 4 caractères.</h2>';
        }
    });

    // Ajouter un écouteur sur le bouton \"Effacer la recherche\" pour effacer le champ de recherche
    clearSearchFieldButton.addEventListener('click', function() {
        searchField.value = '';
        searchResultsContainer.innerHTML = '';
        updateClearSearchButton();
    });

    // Fonction pour mettre à jour l'état du bouton \"Effacer la recherche\"
    function updateClearSearchButton() {
        clearSearchFieldButton.disabled = searchField.value.length <= 2;
    }

    // Mettre à jour l'état initial du bouton \"Filtres\"
    updateFilterButton();

    // Rendre le bouton \"Appliquer\" initialement indisponible
    applyButton.disabled = true;

    // Mettre à jour le nombre de filtres appliqués
    updateFilterCount();
});
</script>", "search/new.html.twig", "/var/www/html/doc-and-go/templates/search/new.html.twig");
    }
}
