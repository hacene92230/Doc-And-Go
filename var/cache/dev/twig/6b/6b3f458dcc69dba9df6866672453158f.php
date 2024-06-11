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

/* speciality/show.html.twig */
class __TwigTemplate_6fcb479e729be7434b0e6cecf155d392 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "speciality/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "speciality/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "speciality/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["speciality"]) || array_key_exists("speciality", $context) ? $context["speciality"] : (function () { throw new RuntimeError('Variable "speciality" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<h2 class=\"text-3xl text-center font-bold my-10\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["speciality"]) || array_key_exists("speciality", $context) ? $context["speciality"] : (function () { throw new RuntimeError('Variable "speciality" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</h2>


<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 p-4\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["speciality"]) || array_key_exists("speciality", $context) ? $context["speciality"] : (function () { throw new RuntimeError('Variable "speciality" does not exist.', 10, $this->source); })()), "doctors", [], "any", false, false, false, 10));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 11
            yield "<div class=\" p-4 border rounded-lg shadow bg-white px-2\">
    <div class=\"text-left mt-3\">
\t<h5 class=\"text-xl font-bold m-2\" id=\"maModaleLabel";
            // line 13
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), "html", null, true);
            yield "\">Docteur ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "firstName", [], "any", false, false, false, 13), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "lastName", [], "any", false, false, false, 13), "html", null, true);
            yield "</h5>
\t<p class=\"m-1\"><i class=\"fa-solid fa-location-dot\"></i> ";
            // line 14
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "zipCode", [], "any", false, false, false, 14), "html", null, true);
            yield ", ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "city", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
\t<p class=\"m-1\"><i class=\"fa fa-phone\"></i> ";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "phoneNumber", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
\t<p class=\"m-1\"><i class=\"fa fa-envelope\"></i> ";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "email", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>

        <!-- Button to trigger the modal -->
        <button type=\"button\" id=\"btnModale";
            // line 19
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), "html", null, true);
            yield "\" class=\"btn btn-primary bg-blue-500 text-white font-bold py-2 px-4 rounded m-2\" aria-label=\"Voir détails du Docteur ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "firstName", [], "any", false, false, false, 19), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "lastName", [], "any", false, false, false, 19), "html", null, true);
            yield "\">
            Voir Détails du Docteur
        </button>
    </div>
    <!-- Modal -->
    <div class=\"modal-overlay fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden\" id=\"maModaleOverlay";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 24), "html", null, true);
            yield "\">
        <div class=\"modal-content bg-white p-6 rounded shadow-md w-full max-w-lg mx-4\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"maModaleLabel";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25), "html", null, true);
            yield "\" tabindex=\"-1\">
            <div class=\"flex justify-between items-center\">
                <h5 class=\"modal-title text-xl font-bold\" id=\"maModaleLabel";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
            yield "\">Docteur ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "firstName", [], "any", false, false, false, 27), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "lastName", [], "any", false, false, false, 27), "html", null, true);
            yield "</h5>
                <button class=\"close-btn text-xl\" id=\"closeModale";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28), "html", null, true);
            yield "\" aria-label=\"Fermer la modale\">&times;</button>
            </div>
            <div class=\"modal-body mt-4 mb-6\">
                <!-- Display doctor details -->
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Le trouver</h2>
                    <p>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "street", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                    <p>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "zipCode", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                    <p>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "city", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Contactez-le</h2>
                    <p>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "phoneNumber", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                    <p>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "email", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Spécialité</h2>
                    <p>";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "speciality", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Inscription</h2>
                    <p>";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "createdAt", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
            yield "</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Prise de rendez-vous</h2>
                    ";
            // line 53
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "planings", [], "any", false, false, false, 53))) {
                // line 54
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "speciality", [], "any", false, false, false, 54), "reasons", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 55
                    yield "                            <form action=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_new", ["doctor" => CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    yield "\" method=\"post\">
                                <button type=\"submit\" class=\"bg-blue-500 text-white font-bold py-2 px-4 rounded mt-2\">";
                    // line 56
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reason"], "name", [], "any", false, false, false, 56), "html", null, true);
                    yield "</button>
                            </form>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                yield "                    ";
            } else {
                // line 60
                yield "                        <p>Aucun créneau n'est pour le moment disponible</p>
                    ";
            }
            // line 62
            yield "                </div>
            </div>
        </div>
    </div>
</div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "</div>

<style>
    .modal-overlay.active {
        display: flex;
    }
</style>

<script>
    \$(document).ready(function() {
        let lastFocusedElement;

        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["speciality"]) || array_key_exists("speciality", $context) ? $context["speciality"] : (function () { throw new RuntimeError('Variable "speciality" does not exist.', 80, $this->source); })()), "doctors", [], "any", false, false, false, 80));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 81
            yield "            \$(\"#btnModale";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 81), "html", null, true);
            yield "\").on(\"click\", function() {
                lastFocusedElement = document.activeElement;
                \$(\"#maModaleOverlay";
            // line 83
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 83), "html", null, true);
            yield "\").addClass(\"active\");
                \$(\"#maModaleOverlay";
            // line 84
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 84), "html", null, true);
            yield "\").find(\".modal-content\").attr(\"tabindex\", \"-1\").focus();
                \$(\"body\").css(\"overflow\", \"hidden\"); // Empêcher le défilement de la page principale
            });

            \$(\"#closeModale";
            // line 88
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88), "html", null, true);
            yield "\").on(\"click\", function() {
                closeModale";
            // line 89
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 89), "html", null, true);
            yield "();
            });

            // Fonction pour fermer la modal
            function closeModale";
            // line 93
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93), "html", null, true);
            yield "() {
                \$(\"#maModaleOverlay";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 94), "html", null, true);
            yield "\").removeClass(\"active\");
                lastFocusedElement.focus();
                \$(\"body\").css(\"overflow\", \"auto\"); // Réactiver le défilement de la page principale
            }

            // Fermer la modal en appuyant sur la touche \"Échap\"
            \$(document).on(\"keydown\", function(e) {
                if (e.key === \"Escape\") {
                    closeModale";
            // line 102
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
            yield "();
                }
            });

            // Empêcher la navigation par tabulation en dehors de la modal
            \$(\"#maModaleOverlay";
            // line 107
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), "html", null, true);
            yield "\").on(\"keydown\", function(e) {
                if (e.key === \"Tab\") {
                    const focusableModalElements = \$('#maModaleOverlay";
            // line 109
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109), "html", null, true);
            yield "').find('button, [href], input, select, textarea, [tabindex]:not([tabindex=\"-1\"])').filter(':visible');
                    const firstElement = focusableModalElements[0];
                    const lastElement = focusableModalElements[focusableModalElements.length - 1];

                    if (!e.shiftKey && document.activeElement === lastElement) {
                        e.preventDefault();
                        firstElement.focus();
                    } else if (e.shiftKey && document.activeElement === firstElement) {
                        e.preventDefault();
                        lastElement.focus();
                    }
                }
            });
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "    });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "speciality/show.html.twig";
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
        return array (  387 => 123,  359 => 109,  354 => 107,  346 => 102,  335 => 94,  331 => 93,  324 => 89,  320 => 88,  313 => 84,  309 => 83,  303 => 81,  286 => 80,  272 => 68,  253 => 62,  249 => 60,  246 => 59,  237 => 56,  232 => 55,  227 => 54,  225 => 53,  218 => 49,  211 => 45,  204 => 41,  200 => 40,  193 => 36,  189 => 35,  185 => 34,  176 => 28,  168 => 27,  163 => 25,  159 => 24,  147 => 19,  141 => 16,  137 => 15,  131 => 14,  123 => 13,  119 => 11,  102 => 10,  94 => 6,  84 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ speciality.name }} {{ parent() }} {% endblock %}

{% block body %}
<h2 class=\"text-3xl text-center font-bold my-10\">{{ speciality.name }}</h2>


<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 p-4\">
{% for doctor in speciality.doctors %}
<div class=\" p-4 border rounded-lg shadow bg-white px-2\">
    <div class=\"text-left mt-3\">
\t<h5 class=\"text-xl font-bold m-2\" id=\"maModaleLabel{{ loop.index }}\">Docteur {{ doctor.firstName }} {{ doctor.lastName }}</h5>
\t<p class=\"m-1\"><i class=\"fa-solid fa-location-dot\"></i> {{ doctor.zipCode }}, {{ doctor.city }}</p>
\t<p class=\"m-1\"><i class=\"fa fa-phone\"></i> {{ doctor.phoneNumber }}</p>
\t<p class=\"m-1\"><i class=\"fa fa-envelope\"></i> {{ doctor.email }}</p>

        <!-- Button to trigger the modal -->
        <button type=\"button\" id=\"btnModale{{ loop.index }}\" class=\"btn btn-primary bg-blue-500 text-white font-bold py-2 px-4 rounded m-2\" aria-label=\"Voir détails du Docteur {{ doctor.firstName }} {{ doctor.lastName }}\">
            Voir Détails du Docteur
        </button>
    </div>
    <!-- Modal -->
    <div class=\"modal-overlay fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden\" id=\"maModaleOverlay{{ loop.index }}\">
        <div class=\"modal-content bg-white p-6 rounded shadow-md w-full max-w-lg mx-4\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"maModaleLabel{{ loop.index }}\" tabindex=\"-1\">
            <div class=\"flex justify-between items-center\">
                <h5 class=\"modal-title text-xl font-bold\" id=\"maModaleLabel{{ loop.index }}\">Docteur {{ doctor.firstName }} {{ doctor.lastName }}</h5>
                <button class=\"close-btn text-xl\" id=\"closeModale{{ loop.index }}\" aria-label=\"Fermer la modale\">&times;</button>
            </div>
            <div class=\"modal-body mt-4 mb-6\">
                <!-- Display doctor details -->
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Le trouver</h2>
                    <p>{{ doctor.street }}</p>
                    <p>{{ doctor.zipCode }}</p>
                    <p>{{ doctor.city }}</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Contactez-le</h2>
                    <p>{{ doctor.phoneNumber }}</p>
                    <p>{{ doctor.email }}</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Spécialité</h2>
                    <p>{{ doctor.speciality.name }}</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Inscription</h2>
                    <p>{{ doctor.createdAt|date(\"d/m/Y\") }}</p>
                </div>
                <div class=\"border p-3 mb-3\">
                    <h2 class=\"font-bold text-lg\">Prise de rendez-vous</h2>
                    {% if doctor.planings is not empty %}
                        {% for reason in doctor.speciality.reasons %}
                            <form action=\"{{ path('app_appointment_new', {'doctor': doctor.id}) }}\" method=\"post\">
                                <button type=\"submit\" class=\"bg-blue-500 text-white font-bold py-2 px-4 rounded mt-2\">{{ reason.name }}</button>
                            </form>
                        {% endfor %}
                    {% else %}
                        <p>Aucun créneau n'est pour le moment disponible</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endfor %}
</div>

<style>
    .modal-overlay.active {
        display: flex;
    }
</style>

<script>
    \$(document).ready(function() {
        let lastFocusedElement;

        {% for doctor in speciality.doctors %}
            \$(\"#btnModale{{ loop.index }}\").on(\"click\", function() {
                lastFocusedElement = document.activeElement;
                \$(\"#maModaleOverlay{{ loop.index }}\").addClass(\"active\");
                \$(\"#maModaleOverlay{{ loop.index }}\").find(\".modal-content\").attr(\"tabindex\", \"-1\").focus();
                \$(\"body\").css(\"overflow\", \"hidden\"); // Empêcher le défilement de la page principale
            });

            \$(\"#closeModale{{ loop.index }}\").on(\"click\", function() {
                closeModale{{ loop.index }}();
            });

            // Fonction pour fermer la modal
            function closeModale{{ loop.index }}() {
                \$(\"#maModaleOverlay{{ loop.index }}\").removeClass(\"active\");
                lastFocusedElement.focus();
                \$(\"body\").css(\"overflow\", \"auto\"); // Réactiver le défilement de la page principale
            }

            // Fermer la modal en appuyant sur la touche \"Échap\"
            \$(document).on(\"keydown\", function(e) {
                if (e.key === \"Escape\") {
                    closeModale{{ loop.index }}();
                }
            });

            // Empêcher la navigation par tabulation en dehors de la modal
            \$(\"#maModaleOverlay{{ loop.index }}\").on(\"keydown\", function(e) {
                if (e.key === \"Tab\") {
                    const focusableModalElements = \$('#maModaleOverlay{{ loop.index }}').find('button, [href], input, select, textarea, [tabindex]:not([tabindex=\"-1\"])').filter(':visible');
                    const firstElement = focusableModalElements[0];
                    const lastElement = focusableModalElements[focusableModalElements.length - 1];

                    if (!e.shiftKey && document.activeElement === lastElement) {
                        e.preventDefault();
                        firstElement.focus();
                    } else if (e.shiftKey && document.activeElement === firstElement) {
                        e.preventDefault();
                        lastElement.focus();
                    }
                }
            });
        {% endfor %}
    });
</script>

{% endblock %}
", "speciality/show.html.twig", "/var/www/html/doc-and-go/templates/speciality/show.html.twig");
    }
}
