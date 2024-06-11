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

/* speciality/index.html.twig */
class __TwigTemplate_5c594bcd8ee5ff36238c5fe515bcdba2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "speciality/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "speciality/index.html.twig"));

        // line 1
        yield "    <section class=\"bg-teal-50 p-8\">
        <h1 class=\"text-center font-bold text-3xl mt-6\">Nos spécialités médicales</h1>
        <p class=\"text-center font-medium text-lg mt-2 mb-6\">Trouvez la spécialité que vous voulez en utilisant le filtre de recherche ci-dessous, en triant par ordre alphabétique, ou en filtrant par lettre.</p>

<div>

        <div class=\"max-w-md mx-auto mb-10\">
            <input type=\"text\" id=\"searchSpeciality\" placeholder=\"Rechercher une spécialité...\" class=\"w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:border-indigo-600\">
        </div>

<button id=\"toggle-speciality\"></button>

<div  id=\"show-speciality\" style=\"display: none;\">
<div>
";
        // line 16
        yield "<button class=\" bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" id=\"goToTop\">Aller au début</button>

";
        // line 19
        yield "<button class=\" bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" id=\"goToBottom\">Aller à la fin</button>

</div>

        <div class=\"text-center mb-6 flex justify-center items-center\">
            <button id=\"sortAsc\" class=\"filter-button bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" aria-pressed=\"false\">Ordre croissant (A-Z)</button>
            <button id=\"sortDesc\" class=\"filter-button bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" aria-pressed=\"false\">Ordre décroissant (Z-A)</button>
        </div>

        <div class=\"text-center mb-6\">
            <select id=\"filterLetter\" class=\"filter-button bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" aria-selected=\"false\">
                <option value=\"\">Filtrer par lettre</option>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::getArrayKeysFilter((isset($context["specialitiesByLetter"]) || array_key_exists("specialitiesByLetter", $context) ? $context["specialitiesByLetter"] : (function () { throw new RuntimeError('Variable "specialitiesByLetter" does not exist.', 31, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 32
            yield "                    <option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["letter"], "html", null, true);
            yield "\" class=\"bg-white text-black\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["letter"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            </select>
 <div class=\"\">
 <div class=\"flex justify-center m-2\">
        <button id=\"prevPage\" class=\"bg-teal-600 hover:bg-teal-700 cursor-pointer text-white font-bold py-2 px-4 rounded-l-lg focus:outline-none\">Précédent</button>
        <button id=\"nextPage\" class=\"bg-teal-600 hover:bg-teal-700 cursor-pointer text-white font-bold py-2 px-4 rounded-r-lg focus:outline-none\">Suivant</button>
    </div>
        <label for=\"itemsPerPage\" class=\"mr-2 m-2 text-teal-800\">Éléments par page :</label>
        <select id=\"itemsPerPage\" class=\"border border-teal-300 text-teal-800 py-2 px-4 rounded-lg shadow-sm cursor-pointer focus:outline-none\">
            <option value=\"6\">6</option>
            <option value=\"10\">10</option>
            <option value=\"15\">15</option>
        </select>
    </div>
</div>
</div>
     
        <div id=\"allSpecialities\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10\">
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specialitiesByLetter"]) || array_key_exists("specialitiesByLetter", $context) ? $context["specialitiesByLetter"] : (function () { throw new RuntimeError('Variable "specialitiesByLetter" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["letter"] => $context["specialities"]) {
            // line 52
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["specialities"]);
            foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
                // line 53
                yield "                    <div class=\"speciality-item p-4 border rounded-lg shadow-sm bg-white\" data-name=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "name", [], "any", false, false, false, 53), "html", null, true);
                yield "\" data-letter=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["letter"], "html", null, true);
                yield "\">
                        <h3 class=\"text-xl font-semibold\">";
                // line 54
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "name", [], "any", false, false, false, 54), "html", null, true);
                yield "</h3>
                        <p class=\"mt-2\">description speciality ";
                // line 55
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "id", [], "any", false, false, false, 55), "html", null, true);
                yield "</p>
<button class=\"text-white my-2 bg-teal-500 rounded shadow-sm hover:bg-teal-600 py-2 px-4\" onclick=\"window.location='";
                // line 56
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_speciality_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "'\">
                            Praticiens associés
                        </button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['letter'], $context['specialities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </div>
    </section>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function () {

// Fonction pour normaliser une chaîne de caractères en enlevant les accents
function normalizeString(str) {
    return str.normalize('NFD').replace(/[\\u0300-\\u036f]/g, '');
}

// Fonction pour la recherche de spécialité
function searchSpeciality() {
    const searchValue = normalizeString(\$('#searchSpeciality').val().trim().toLowerCase());

    if (searchValue === '') {
            specialityItems.hide(); // Cache tous les éléments
            specialityItems.slice(0, 6).show(); // Affiche les 6 premiers éléments
    } else {
        specialityItems.each(function () {
            const specialityName = normalizeString(\$(this).data(\"name\").toLowerCase());
            if (specialityName.includes(searchValue)) {
                \$(this).show();
            } else {
                \$(this).hide();
            }
        });
    }
}

// Associer la fonction de recherche à l'événement de changement du champ de recherche
\$('#searchSpeciality').on('input', function () {
    searchSpeciality();
});

    // Afficher / masquer la div avec l'id \"chat-container\"
    \$('#toggle-speciality').click(function() {
        \$('#show-speciality').toggle();
        const buttonText = \$('#show-speciality').is(':visible') ? 'fermer les filtres' : 'Ouvrir les filtres';
        \$('#toggle-speciality').text(buttonText);
    });

    // Définir le texte initial du bouton
    \$('#toggle-speciality').text('Ouvrir les filtres');


    // Fonction pour gérer le focus après le changement de page
    function focusOnTop() {
        const pageTitle = \$('h1');
        if (pageTitle.length > 0) {
            pageTitle[0].scrollIntoView();
            pageTitle.focus();
        }
    }

    // Pagination
    const prevPageBtn = \$(\"#prevPage\");
    const nextPageBtn = \$(\"#nextPage\");
    const goToTopBtn = \$(\"#goToTop\");
    const goToBottomBtn = \$(\"#goToBottom\");

    const allSpecialities = \$(\"#allSpecialities\");
    const specialityItems = \$(\".speciality-item\");

    let currentPage = 1;
    let itemsPerPage = parseInt(\$(\"#itemsPerPage\").val());
    let totalItems = specialityItems.length;
    let totalPages = Math.ceil(totalItems / itemsPerPage);

    // Fonction pour afficher les éléments de la page actuelle
    function showPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, totalItems); // Correction pour la dernière page

        specialityItems.each(function (index) {
            if (index >= startIndex && index < endIndex) {
                \$(this).css(\"display\", \"block\");
            } else {
                \$(this).css(\"display\", \"none\");
            }
        });

        // Désactiver le bouton \"Précédent\" si nous sommes déjà sur la première page
        prevPageBtn.prop(\"disabled\", currentPage === 1);

        // Désactiver le bouton \"Suivant\" si nous sommes déjà sur la dernière page
        nextPageBtn.prop(\"disabled\", currentPage === totalPages);

        // Désactiver le bouton \"Aller au début\" si nous sommes déjà à la première page
        goToTopBtn.prop(\"disabled\", currentPage === 1);

        // Désactiver le bouton \"Aller à la fin\" si nous sommes déjà à la dernière page
        goToBottomBtn.prop(\"disabled\", currentPage === totalPages);
    }

    // Initialisation : afficher la première page
    showPage(currentPage);

    // Gestion des événements pour la pagination
    prevPageBtn.on(\"click\", function () {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            focusOnTop();
        }
    });

    nextPageBtn.on(\"click\", function () {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
            focusOnTop();
        }
    });

    // Gestion du bouton \"Aller au début\"
    goToTopBtn.on(\"click\", function () {
        currentPage = 1;
        showPage(currentPage);
        focusOnTop();
    });

    // Gestion du bouton \"Aller à la fin\"
    goToBottomBtn.on(\"click\", function () {
        currentPage = totalPages;
        showPage(currentPage);
        focusOnTop();
    });

    // Gestion du changement d'éléments par page
    const itemsPerPageSelect = \$(\"#itemsPerPage\");
    itemsPerPageSelect.on(\"change\", function () {
        itemsPerPage = parseInt(\$(this).val());
        currentPage = 1;
        totalPages = Math.ceil(totalItems / itemsPerPage);
        showPage(currentPage);
        focusOnTop();
    });

    // Accessibilité : Ajouter les attributs ARIA pour les boutons de tri
    const sortAscBtn = \$(\"#sortAsc\");
    const sortDescBtn = \$(\"#sortDesc\");

    sortAscBtn.attr(\"aria-label\", \"Trier par ordre croissant (A-Z)\");
    sortDescBtn.attr(\"aria-label\", \"Trier par ordre décroissant (Z-A)\");

    // Fonction de tri par ordre alphabétique croissant
    function sortAscending() {
        const sortedItems = Array.from(specialityItems).sort((a, b) => {
            return a.textContent.localeCompare(b.textContent);
        });
        allSpecialities.html(\"\");
        sortedItems.forEach(item => allSpecialities.append(item));
    }

    // Fonction de tri par ordre alphabétique décroissant
    function sortDescending() {
        const sortedItems = Array.from(specialityItems).sort((a, b) => {
            return b.textContent.localeCompare(a.textContent);
        });
        allSpecialities.html(\"\");
        sortedItems.forEach(item => allSpecialities.append(item));
    }

    // Gestion des événements pour les boutons de tri
    sortAscBtn.on(\"click\", function () {
        const isPressed = sortAscBtn.attr(\"aria-pressed\") === \"true\";
        sortAscending();
        sortAscBtn.attr(\"aria-pressed\", !isPressed);
        sortDescBtn.attr(\"aria-pressed\", \"false\");
    });

    sortDescBtn.on(\"click\", function () {
        const isPressed = sortDescBtn.attr(\"aria-pressed\") === \"true\";
        sortDescending();
        sortDescBtn.attr(\"aria-pressed\", !isPressed);
        sortAscBtn.attr(\"aria-pressed\", \"false\");
    });

    // Accessibilité : Ajouter une étiquette pour le champ de recherche
    const searchInput = \$(\"#searchSpeciality\");
    const searchInputLabel = \$('label[for=\"searchSpeciality\"]');
    searchInputLabel.attr(\"id\", \"searchSpecialityLabel\");
    searchInput.attr(\"aria-labelledby\", \"searchSpecialityLabel\");

    // Gestion du filtre par lettre
    \$(\"#filterLetter\").on(\"change\", function () {
        const letter = \$(this).val();

        if (letter) {
            specialityItems.each(function () {
                const firstLetter = \$(this).data(\"letter\").charAt(0).toUpperCase();
                if (firstLetter === letter) {
                    \$(this).css(\"display\", \"block\");
                } else {
                    \$(this).css(\"display\", \"none\");
                }
            });
        } else {
            // Si aucune lettre sélectionnée, afficher tous les éléments
            specialityItems.css(\"display\", \"block\");
        }
    });
});
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "speciality/index.html.twig";
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
        return array (  153 => 62,  147 => 61,  136 => 56,  132 => 55,  128 => 54,  121 => 53,  116 => 52,  112 => 51,  93 => 34,  82 => 32,  78 => 31,  64 => 19,  60 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <section class=\"bg-teal-50 p-8\">
        <h1 class=\"text-center font-bold text-3xl mt-6\">Nos spécialités médicales</h1>
        <p class=\"text-center font-medium text-lg mt-2 mb-6\">Trouvez la spécialité que vous voulez en utilisant le filtre de recherche ci-dessous, en triant par ordre alphabétique, ou en filtrant par lettre.</p>

<div>

        <div class=\"max-w-md mx-auto mb-10\">
            <input type=\"text\" id=\"searchSpeciality\" placeholder=\"Rechercher une spécialité...\" class=\"w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:border-indigo-600\">
        </div>

<button id=\"toggle-speciality\"></button>

<div  id=\"show-speciality\" style=\"display: none;\">
<div>
{# Bouton pour aller au début de la liste #}
<button class=\" bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" id=\"goToTop\">Aller au début</button>

{# Bouton pour aller à la fin de la liste #}
<button class=\" bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" id=\"goToBottom\">Aller à la fin</button>

</div>

        <div class=\"text-center mb-6 flex justify-center items-center\">
            <button id=\"sortAsc\" class=\"filter-button bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" aria-pressed=\"false\">Ordre croissant (A-Z)</button>
            <button id=\"sortDesc\" class=\"filter-button bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" aria-pressed=\"false\">Ordre décroissant (Z-A)</button>
        </div>

        <div class=\"text-center mb-6\">
            <select id=\"filterLetter\" class=\"filter-button bg-gray-50 py-2 px-2 rounded shadow cursor-pointer\" aria-selected=\"false\">
                <option value=\"\">Filtrer par lettre</option>
                {% for letter in specialitiesByLetter|keys %}
                    <option value=\"{{ letter }}\" class=\"bg-white text-black\">{{ letter }}</option>
                {% endfor %}
            </select>
 <div class=\"\">
 <div class=\"flex justify-center m-2\">
        <button id=\"prevPage\" class=\"bg-teal-600 hover:bg-teal-700 cursor-pointer text-white font-bold py-2 px-4 rounded-l-lg focus:outline-none\">Précédent</button>
        <button id=\"nextPage\" class=\"bg-teal-600 hover:bg-teal-700 cursor-pointer text-white font-bold py-2 px-4 rounded-r-lg focus:outline-none\">Suivant</button>
    </div>
        <label for=\"itemsPerPage\" class=\"mr-2 m-2 text-teal-800\">Éléments par page :</label>
        <select id=\"itemsPerPage\" class=\"border border-teal-300 text-teal-800 py-2 px-4 rounded-lg shadow-sm cursor-pointer focus:outline-none\">
            <option value=\"6\">6</option>
            <option value=\"10\">10</option>
            <option value=\"15\">15</option>
        </select>
    </div>
</div>
</div>
     
        <div id=\"allSpecialities\" class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10\">
            {% for letter, specialities in specialitiesByLetter %}
                {% for speciality in specialities %}
                    <div class=\"speciality-item p-4 border rounded-lg shadow-sm bg-white\" data-name=\"{{ speciality.name }}\" data-letter=\"{{ letter }}\">
                        <h3 class=\"text-xl font-semibold\">{{ speciality.name }}</h3>
                        <p class=\"mt-2\">description speciality {{ speciality.id }}</p>
<button class=\"text-white my-2 bg-teal-500 rounded shadow-sm hover:bg-teal-600 py-2 px-4\" onclick=\"window.location='{{ path('app_speciality_show', {'id': speciality.id}) }}'\">
                            Praticiens associés
                        </button>
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    </section>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function () {

// Fonction pour normaliser une chaîne de caractères en enlevant les accents
function normalizeString(str) {
    return str.normalize('NFD').replace(/[\\u0300-\\u036f]/g, '');
}

// Fonction pour la recherche de spécialité
function searchSpeciality() {
    const searchValue = normalizeString(\$('#searchSpeciality').val().trim().toLowerCase());

    if (searchValue === '') {
            specialityItems.hide(); // Cache tous les éléments
            specialityItems.slice(0, 6).show(); // Affiche les 6 premiers éléments
    } else {
        specialityItems.each(function () {
            const specialityName = normalizeString(\$(this).data(\"name\").toLowerCase());
            if (specialityName.includes(searchValue)) {
                \$(this).show();
            } else {
                \$(this).hide();
            }
        });
    }
}

// Associer la fonction de recherche à l'événement de changement du champ de recherche
\$('#searchSpeciality').on('input', function () {
    searchSpeciality();
});

    // Afficher / masquer la div avec l'id \"chat-container\"
    \$('#toggle-speciality').click(function() {
        \$('#show-speciality').toggle();
        const buttonText = \$('#show-speciality').is(':visible') ? 'fermer les filtres' : 'Ouvrir les filtres';
        \$('#toggle-speciality').text(buttonText);
    });

    // Définir le texte initial du bouton
    \$('#toggle-speciality').text('Ouvrir les filtres');


    // Fonction pour gérer le focus après le changement de page
    function focusOnTop() {
        const pageTitle = \$('h1');
        if (pageTitle.length > 0) {
            pageTitle[0].scrollIntoView();
            pageTitle.focus();
        }
    }

    // Pagination
    const prevPageBtn = \$(\"#prevPage\");
    const nextPageBtn = \$(\"#nextPage\");
    const goToTopBtn = \$(\"#goToTop\");
    const goToBottomBtn = \$(\"#goToBottom\");

    const allSpecialities = \$(\"#allSpecialities\");
    const specialityItems = \$(\".speciality-item\");

    let currentPage = 1;
    let itemsPerPage = parseInt(\$(\"#itemsPerPage\").val());
    let totalItems = specialityItems.length;
    let totalPages = Math.ceil(totalItems / itemsPerPage);

    // Fonction pour afficher les éléments de la page actuelle
    function showPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, totalItems); // Correction pour la dernière page

        specialityItems.each(function (index) {
            if (index >= startIndex && index < endIndex) {
                \$(this).css(\"display\", \"block\");
            } else {
                \$(this).css(\"display\", \"none\");
            }
        });

        // Désactiver le bouton \"Précédent\" si nous sommes déjà sur la première page
        prevPageBtn.prop(\"disabled\", currentPage === 1);

        // Désactiver le bouton \"Suivant\" si nous sommes déjà sur la dernière page
        nextPageBtn.prop(\"disabled\", currentPage === totalPages);

        // Désactiver le bouton \"Aller au début\" si nous sommes déjà à la première page
        goToTopBtn.prop(\"disabled\", currentPage === 1);

        // Désactiver le bouton \"Aller à la fin\" si nous sommes déjà à la dernière page
        goToBottomBtn.prop(\"disabled\", currentPage === totalPages);
    }

    // Initialisation : afficher la première page
    showPage(currentPage);

    // Gestion des événements pour la pagination
    prevPageBtn.on(\"click\", function () {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            focusOnTop();
        }
    });

    nextPageBtn.on(\"click\", function () {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
            focusOnTop();
        }
    });

    // Gestion du bouton \"Aller au début\"
    goToTopBtn.on(\"click\", function () {
        currentPage = 1;
        showPage(currentPage);
        focusOnTop();
    });

    // Gestion du bouton \"Aller à la fin\"
    goToBottomBtn.on(\"click\", function () {
        currentPage = totalPages;
        showPage(currentPage);
        focusOnTop();
    });

    // Gestion du changement d'éléments par page
    const itemsPerPageSelect = \$(\"#itemsPerPage\");
    itemsPerPageSelect.on(\"change\", function () {
        itemsPerPage = parseInt(\$(this).val());
        currentPage = 1;
        totalPages = Math.ceil(totalItems / itemsPerPage);
        showPage(currentPage);
        focusOnTop();
    });

    // Accessibilité : Ajouter les attributs ARIA pour les boutons de tri
    const sortAscBtn = \$(\"#sortAsc\");
    const sortDescBtn = \$(\"#sortDesc\");

    sortAscBtn.attr(\"aria-label\", \"Trier par ordre croissant (A-Z)\");
    sortDescBtn.attr(\"aria-label\", \"Trier par ordre décroissant (Z-A)\");

    // Fonction de tri par ordre alphabétique croissant
    function sortAscending() {
        const sortedItems = Array.from(specialityItems).sort((a, b) => {
            return a.textContent.localeCompare(b.textContent);
        });
        allSpecialities.html(\"\");
        sortedItems.forEach(item => allSpecialities.append(item));
    }

    // Fonction de tri par ordre alphabétique décroissant
    function sortDescending() {
        const sortedItems = Array.from(specialityItems).sort((a, b) => {
            return b.textContent.localeCompare(a.textContent);
        });
        allSpecialities.html(\"\");
        sortedItems.forEach(item => allSpecialities.append(item));
    }

    // Gestion des événements pour les boutons de tri
    sortAscBtn.on(\"click\", function () {
        const isPressed = sortAscBtn.attr(\"aria-pressed\") === \"true\";
        sortAscending();
        sortAscBtn.attr(\"aria-pressed\", !isPressed);
        sortDescBtn.attr(\"aria-pressed\", \"false\");
    });

    sortDescBtn.on(\"click\", function () {
        const isPressed = sortDescBtn.attr(\"aria-pressed\") === \"true\";
        sortDescending();
        sortDescBtn.attr(\"aria-pressed\", !isPressed);
        sortAscBtn.attr(\"aria-pressed\", \"false\");
    });

    // Accessibilité : Ajouter une étiquette pour le champ de recherche
    const searchInput = \$(\"#searchSpeciality\");
    const searchInputLabel = \$('label[for=\"searchSpeciality\"]');
    searchInputLabel.attr(\"id\", \"searchSpecialityLabel\");
    searchInput.attr(\"aria-labelledby\", \"searchSpecialityLabel\");

    // Gestion du filtre par lettre
    \$(\"#filterLetter\").on(\"change\", function () {
        const letter = \$(this).val();

        if (letter) {
            specialityItems.each(function () {
                const firstLetter = \$(this).data(\"letter\").charAt(0).toUpperCase();
                if (firstLetter === letter) {
                    \$(this).css(\"display\", \"block\");
                } else {
                    \$(this).css(\"display\", \"none\");
                }
            });
        } else {
            // Si aucune lettre sélectionnée, afficher tous les éléments
            specialityItems.css(\"display\", \"block\");
        }
    });
});
</script>
", "speciality/index.html.twig", "/var/www/html/doc-and-go/templates/speciality/index.html.twig");
    }
}
