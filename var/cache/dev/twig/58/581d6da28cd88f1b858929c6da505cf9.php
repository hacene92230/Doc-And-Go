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

/* planing/_form.html.twig */
class __TwigTemplate_45c93f994340ff7d6ff1c8e366a6e3c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planing/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planing/_form.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        yield "

<div id=\"step1\">
    <h2>Étape 1: Sélectionnez les dates</h2>

    ";
        // line 10
        yield "    <div class=\"form-row\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "startDate", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "col-md-2"], "label" => "Date de début"]);
        yield "
        <div class=\"col-md-10\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "startDate", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"], "id" => "planing_startDate"]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "startDate", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-row\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "endDate", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "col-md-2"], "label" => "Date de fin"]);
        yield "
        <div class=\"col-md-10\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "endDate", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"], "id" => "planing_endDate"]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "endDate", [], "any", false, false, false, 22), 'errors');
        yield "
        </div>
    </div>

    <button type=\"button\" id=\"nextStep1\">Suivant</button>
</div>

<div id=\"step2\" style=\"display: none;\">
    <h2 id=\"step2Title\">Étape 2: Configuration du planning</h2>
    <p id=\"intervalDisplay\"></p>

    ";
        // line 34
        yield "    <div id=\"dayWorksContainer\">
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dayWorks", [], "any", false, false, false, 35), 'label');
        yield "
        <div id=\"dayWorksList\" data-prototype=\"";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dayWorks", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "prototype", [], "any", false, false, false, 36), 'widget'), "html_attr");
        yield "\"></div>
        <button type=\"button\" id=\"showMore\" style=\"display: none;\">Voir plus</button>
        <button type=\"button\" id=\"showLess\" style=\"display: none;\">Voir moins</button>
    </div>

    <button type=\"button\" id=\"prevStep2\">Précédent</button>
    <button type=\"button\" id=\"nextStep2\">Suivant</button>
</div>

<div id=\"step3\" style=\"display: none;\">
    <h2>Récapitulatif</h2>

    <p>Date de début sélectionnée: <span id=\"startDateDisplay\"></span></p>
    <p>Date de fin sélectionnée: <span id=\"endDateDisplay\"></span></p>

    ";
        // line 52
        yield "
    <button type=\"button\" id=\"prevStep3\">Précédent</button>
    <button type=\"submit\">Créer</button>
</div>

";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        yield "
";
        // line 59
        yield "
";
        // line 61
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

";
        // line 64
        yield "<script>
    \$(document).ready(function() {
        // Obtenir la date actuelle au format ISO
        var now = new Date().toISOString().split(\"T\")[0];

        // Préremplir le champ de date de début avec la date actuelle
        \$('#planing_startDate').val(now);

        // Définir la date de fin comme un jour après la date de début lors du chargement de la page
        var startDate = new Date(\$('#planing_startDate').val());
        var endDate = new Date(startDate);
        endDate.setDate(startDate.getDate() + 1);
        \$('#planing_endDate').val(endDate.toISOString().split(\"T\")[0]);

        // Gérer la navigation entre les étapes du formulaire
        \$('#nextStep1').click(function() {
            var startDateString = \$('#startDateDisplay').text().trim();
            var endDateString = \$('#endDateDisplay').text().trim();
            if (!startDateString || !endDateString) {
                alert('Veuillez sélectionner les dates de début et de fin.');
                return;
            }
            \$('#step1').hide();
            \$('#step2').show();
        });

        \$('#prevStep2').click(function() {
            \$('#step2').hide();
            \$('#step1').show();
        });

        \$('#nextStep2').click(function() {
            \$('#step2').hide();
            \$('#step3').show();
        });

        \$('#prevStep3').click(function() {
            \$('#step3').hide();
            \$('#step2').show();
        });

        // Afficher les dates sélectionnées au format \"jour/mois/année\"
        \$('#planing_startDate, #planing_endDate').change(function() {
            var startDate = new Date(\$('#planing_startDate').val());
            var endDate = new Date(\$('#planing_endDate').val());

            // Vérifier si la date de fin est égale à la date de début
            if (endDate <= startDate) {
                // Si oui, définir la date de fin comme un jour après la date de début
                endDate.setDate(startDate.getDate() + 1);
                \$('#planing_endDate').val(endDate.toISOString().split(\"T\")[0]);
                alert(\"La date de fin doit être ultérieure à la date de début. La date de fin a été ajustée.\");
            }

            var startDateString = startDate.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long', day: 'numeric' });
            var endDateString = endDate.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long', day: 'numeric' });
            \$('#startDateDisplay').text(startDateString);
            \$('#endDateDisplay').text(endDateString);

            // Calculer le nombre de jours entre les deux dates
            var daysDifference = Math.round((endDate - startDate) / (1000 * 60 * 60 * 24));

            // Afficher l'intervalle choisi
            \$('#intervalDisplay').text('Vous avez choisi de créer un planning du ' + startDateString + ' au ' + endDateString);

            // Pré-remplir les champs de date de la collection dayWorks avec les dates correspondantes
            var dayWorksStartDate = new Date(startDate);
            var dayWorksList = \$('#dayWorksList');
            dayWorksList.empty();
            for (var i = 0; i < daysDifference; i++) {
                var day = new Date(dayWorksStartDate);
                day.setDate(day.getDate() + i);
                var formattedDate = day.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long', day: 'numeric' });
                var dayWorkHTML = '<div><h2>' + formattedDate + '</h2>' + dayWorksList.attr('data-prototype').replace(/__name__/g, i) + '</div>';
                dayWorksList.append(dayWorkHTML);
                // Pré-remplir le champ de date de la collection dayWorks avec la date correspondante
                var dateInput = \$('#planing_dayWorks_' + i + '_date');
                dateInput.val(day.toISOString().split(\"T\")[0]);
            }

            // Afficher ou cacher le bouton \"Voir plus\" en fonction du nombre de jours
            \$('#showMore').toggle(daysDifference > 7);

            // Afficher 7 éléments de dayWorks par défaut
            \$('#dayWorksList').children('div').slice(7).hide();

            // Afficher ou cacher le bouton \"Voir moins\" en fonction du nombre de jours initial
            \$('#showLess').toggle(false);
        });

        // Empêcher la sélection de dates antérieures à la date actuelle
        \$('#planing_startDate, #planing_endDate').on('change', function() {
            var selectedDate = new Date(\$(this).val());
            var currentDate = new Date(now);

            if (selectedDate < currentDate) {
                \$(this).val(now);
            }
        });

        // Gérer l'affichage de plus ou moins de 7 éléments de dayWorks
        \$('#showMore').click(function() {
            \$('#dayWorksList').children('div:hidden').slice(0, 7).show();
            \$('#showLess').show();
            if (\$('#dayWorksList').children('div:hidden').length === 0) {
                \$(this).hide();
            }
        });

        \$('#showLess').click(function() {
            \$('#dayWorksList').children('div:visible').slice(-7).hide();
            \$('#showMore').show();
            if (\$('#dayWorksList').children('div:visible').length <= 7) {
                \$(this).hide();
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
        return "planing/_form.html.twig";
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
        return array (  141 => 64,  137 => 61,  134 => 59,  130 => 57,  123 => 52,  105 => 36,  101 => 35,  98 => 34,  84 => 22,  80 => 21,  75 => 19,  67 => 14,  63 => 13,  58 => 11,  55 => 10,  47 => 4,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/form.html.twig #}

{# Début du formulaire #}
{{ form_start(form) }}

<div id=\"step1\">
    <h2>Étape 1: Sélectionnez les dates</h2>

    {# Première étape: Champs startDate et endDate #}
    <div class=\"form-row\">
        {{ form_label(form.startDate, 'Date de début', {'label_attr': {'class': 'col-md-2'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(form.startDate, {'attr': {'class': 'form-control'}, 'id': 'planing_startDate'}) }}
            {{ form_errors(form.startDate) }}
        </div>
    </div>

    <div class=\"form-row\">
        {{ form_label(form.endDate, 'Date de fin', {'label_attr': {'class': 'col-md-2'}}) }}
        <div class=\"col-md-10\">
            {{ form_widget(form.endDate, {'attr': {'class': 'form-control'}, 'id': 'planing_endDate'}) }}
            {{ form_errors(form.endDate) }}
        </div>
    </div>

    <button type=\"button\" id=\"nextStep1\">Suivant</button>
</div>

<div id=\"step2\" style=\"display: none;\">
    <h2 id=\"step2Title\">Étape 2: Configuration du planning</h2>
    <p id=\"intervalDisplay\"></p>

    {# Deuxième étape: Les autres champs du formulaire #}
    <div id=\"dayWorksContainer\">
        {{ form_label(form.dayWorks) }}
        <div id=\"dayWorksList\" data-prototype=\"{{ form_widget(form.dayWorks.vars.prototype)|e('html_attr') }}\"></div>
        <button type=\"button\" id=\"showMore\" style=\"display: none;\">Voir plus</button>
        <button type=\"button\" id=\"showLess\" style=\"display: none;\">Voir moins</button>
    </div>

    <button type=\"button\" id=\"prevStep2\">Précédent</button>
    <button type=\"button\" id=\"nextStep2\">Suivant</button>
</div>

<div id=\"step3\" style=\"display: none;\">
    <h2>Récapitulatif</h2>

    <p>Date de début sélectionnée: <span id=\"startDateDisplay\"></span></p>
    <p>Date de fin sélectionnée: <span id=\"endDateDisplay\"></span></p>

    {# Troisième étape: Autres champs du formulaire, si nécessaire #}

    <button type=\"button\" id=\"prevStep3\">Précédent</button>
    <button type=\"submit\">Créer</button>
</div>

{{ form_end(form) }}
{# Fin du formulaire #}

{# Inclure jQuery #}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

{# Script JavaScript pour gérer les étapes #}
<script>
    \$(document).ready(function() {
        // Obtenir la date actuelle au format ISO
        var now = new Date().toISOString().split(\"T\")[0];

        // Préremplir le champ de date de début avec la date actuelle
        \$('#planing_startDate').val(now);

        // Définir la date de fin comme un jour après la date de début lors du chargement de la page
        var startDate = new Date(\$('#planing_startDate').val());
        var endDate = new Date(startDate);
        endDate.setDate(startDate.getDate() + 1);
        \$('#planing_endDate').val(endDate.toISOString().split(\"T\")[0]);

        // Gérer la navigation entre les étapes du formulaire
        \$('#nextStep1').click(function() {
            var startDateString = \$('#startDateDisplay').text().trim();
            var endDateString = \$('#endDateDisplay').text().trim();
            if (!startDateString || !endDateString) {
                alert('Veuillez sélectionner les dates de début et de fin.');
                return;
            }
            \$('#step1').hide();
            \$('#step2').show();
        });

        \$('#prevStep2').click(function() {
            \$('#step2').hide();
            \$('#step1').show();
        });

        \$('#nextStep2').click(function() {
            \$('#step2').hide();
            \$('#step3').show();
        });

        \$('#prevStep3').click(function() {
            \$('#step3').hide();
            \$('#step2').show();
        });

        // Afficher les dates sélectionnées au format \"jour/mois/année\"
        \$('#planing_startDate, #planing_endDate').change(function() {
            var startDate = new Date(\$('#planing_startDate').val());
            var endDate = new Date(\$('#planing_endDate').val());

            // Vérifier si la date de fin est égale à la date de début
            if (endDate <= startDate) {
                // Si oui, définir la date de fin comme un jour après la date de début
                endDate.setDate(startDate.getDate() + 1);
                \$('#planing_endDate').val(endDate.toISOString().split(\"T\")[0]);
                alert(\"La date de fin doit être ultérieure à la date de début. La date de fin a été ajustée.\");
            }

            var startDateString = startDate.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long', day: 'numeric' });
            var endDateString = endDate.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long', day: 'numeric' });
            \$('#startDateDisplay').text(startDateString);
            \$('#endDateDisplay').text(endDateString);

            // Calculer le nombre de jours entre les deux dates
            var daysDifference = Math.round((endDate - startDate) / (1000 * 60 * 60 * 24));

            // Afficher l'intervalle choisi
            \$('#intervalDisplay').text('Vous avez choisi de créer un planning du ' + startDateString + ' au ' + endDateString);

            // Pré-remplir les champs de date de la collection dayWorks avec les dates correspondantes
            var dayWorksStartDate = new Date(startDate);
            var dayWorksList = \$('#dayWorksList');
            dayWorksList.empty();
            for (var i = 0; i < daysDifference; i++) {
                var day = new Date(dayWorksStartDate);
                day.setDate(day.getDate() + i);
                var formattedDate = day.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long', day: 'numeric' });
                var dayWorkHTML = '<div><h2>' + formattedDate + '</h2>' + dayWorksList.attr('data-prototype').replace(/__name__/g, i) + '</div>';
                dayWorksList.append(dayWorkHTML);
                // Pré-remplir le champ de date de la collection dayWorks avec la date correspondante
                var dateInput = \$('#planing_dayWorks_' + i + '_date');
                dateInput.val(day.toISOString().split(\"T\")[0]);
            }

            // Afficher ou cacher le bouton \"Voir plus\" en fonction du nombre de jours
            \$('#showMore').toggle(daysDifference > 7);

            // Afficher 7 éléments de dayWorks par défaut
            \$('#dayWorksList').children('div').slice(7).hide();

            // Afficher ou cacher le bouton \"Voir moins\" en fonction du nombre de jours initial
            \$('#showLess').toggle(false);
        });

        // Empêcher la sélection de dates antérieures à la date actuelle
        \$('#planing_startDate, #planing_endDate').on('change', function() {
            var selectedDate = new Date(\$(this).val());
            var currentDate = new Date(now);

            if (selectedDate < currentDate) {
                \$(this).val(now);
            }
        });

        // Gérer l'affichage de plus ou moins de 7 éléments de dayWorks
        \$('#showMore').click(function() {
            \$('#dayWorksList').children('div:hidden').slice(0, 7).show();
            \$('#showLess').show();
            if (\$('#dayWorksList').children('div:hidden').length === 0) {
                \$(this).hide();
            }
        });

        \$('#showLess').click(function() {
            \$('#dayWorksList').children('div:visible').slice(-7).hide();
            \$('#showMore').show();
            if (\$('#dayWorksList').children('div:visible').length <= 7) {
                \$(this).hide();
            }
        });
    });
</script>
", "planing/_form.html.twig", "/var/www/html/doc-and-go/templates/planing/_form.html.twig");
    }
}
