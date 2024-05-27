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
        yield "<h2>";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["speciality"]) || array_key_exists("speciality", $context) ? $context["speciality"] : (function () { throw new RuntimeError('Variable "speciality" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        yield "</h2>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["speciality"]) || array_key_exists("speciality", $context) ? $context["speciality"] : (function () { throw new RuntimeError('Variable "speciality" does not exist.', 7, $this->source); })()), "doctors", [], "any", false, false, false, 7));
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
            // line 8
            yield "<div class=\"card bordered\">
    <div class=\"col-md-12 text-center mt-3\">
        <!-- Bouton qui déclenchera la modale -->
        <button type=\"button\" id=\"btnModale";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11), "html", null, true);
            yield "\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#maModale";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11), "html", null, true);
            yield "\" aria-label=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "firstName", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "lastName", [], "any", false, false, false, 11), "html", null, true);
            yield "\">
        </button>
    </div>
    <!-- Modale -->
    <div class=\"modal fade\" id=\"maModale";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"maModaleLabel";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), "html", null, true);
            yield "\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-scrollable\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h5 class=\"modal-title\" id=\"maModaleLabel";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22), "html", null, true);
            yield "\">Docteur ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "firstName", [], "any", false, false, false, 22), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "lastName", [], "any", false, false, false, 22), "html", null, true);
            yield "</h5>
                </div>
                <div class=\"modal-body\">
                    <!-- Afficher les détails du docteur -->
                    <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Le trouver</h2>
                        <p>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "street", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                    <p>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "zipCode", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
                    <p>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "city", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
                </div>
                <div class=\"border p-3\">
                    <h2 class=\"font-weight-bold\">Contactez-leu</h2>
                    <p>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "phoneNumber", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                    <p>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                </div>
                <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Spécialité</h2>
                        <p>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "speciality", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Inscription</h2>
                        <p>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "createdAt", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Prise de rendez-vous</h2>
                        ";
            // line 47
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "planings", [], "any", false, false, false, 47))) {
                // line 48
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "speciality", [], "any", false, false, false, 48), "reasons", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 49
                    yield "<form action=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_new", ["doctor" => CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                    yield "\" method=\"post\">
    <button type=\"submit\" class=\"btn btn-primary\">";
                    // line 50
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["reason"], "name", [], "any", false, false, false, 50), "html", null, true);
                    yield "</button>
</form>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 54
                yield "<p>Aucun créneau n'est pour le moment 
 disponible</p>
 ";
            }
            // line 57
            yield "</div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
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
        // line 67
        yield "
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
        return array (  249 => 67,  226 => 57,  221 => 54,  211 => 50,  206 => 49,  201 => 48,  199 => 47,  192 => 43,  185 => 39,  178 => 35,  174 => 34,  167 => 30,  163 => 29,  159 => 28,  146 => 22,  134 => 15,  121 => 11,  116 => 8,  99 => 7,  94 => 6,  84 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ speciality.name }} {{ parent() }} {% endblock %}

{% block body %}
<h2>{{ speciality.name }}</h2>
{% for doctor in speciality.doctors %}
<div class=\"card bordered\">
    <div class=\"col-md-12 text-center mt-3\">
        <!-- Bouton qui déclenchera la modale -->
        <button type=\"button\" id=\"btnModale{{ loop.index }}\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#maModale{{ loop.index }}\" aria-label=\"{{ doctor.firstName }} {{ doctor.lastName }}\">
        </button>
    </div>
    <!-- Modale -->
    <div class=\"modal fade\" id=\"maModale{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"maModaleLabel{{ loop.index }}\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-scrollable\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h5 class=\"modal-title\" id=\"maModaleLabel{{ loop.index }}\">Docteur {{ doctor.firstName }} {{ doctor.lastName }}</h5>
                </div>
                <div class=\"modal-body\">
                    <!-- Afficher les détails du docteur -->
                    <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Le trouver</h2>
                        <p>{{ doctor.street }}</p>
                    <p>{{ doctor.zipCode }}</p>
                    <p>{{ doctor.city }}</p>
                </div>
                <div class=\"border p-3\">
                    <h2 class=\"font-weight-bold\">Contactez-leu</h2>
                    <p>{{ doctor.phoneNumber }}</p>
                    <p>{{ doctor.email }}</p>
                </div>
                <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Spécialité</h2>
                        <p>{{ doctor.speciality.name }}</p>
                    </div>
                    <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Inscription</h2>
                        <p>{{ doctor.createdAt|date(\"d/m/Y\") }}</p>
                    </div>
                    <div class=\"border p-3\">
                        <h2 class=\"font-weight-bold\">Prise de rendez-vous</h2>
                        {% if doctor.planings is not empty %}
                        {% for reason in doctor.speciality.reasons %}
<form action=\"{{ path('app_appointment_new', {'doctor': doctor.id}) }}\" method=\"post\">
    <button type=\"submit\" class=\"btn btn-primary\">{{ reason.name }}</button>
</form>
{% endfor %}
{% else %}
<p>Aucun créneau n'est pour le moment 
 disponible</p>
 {% endif %}
</div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
{% endfor %}

{% endblock %}", "speciality/show.html.twig", "/var/www/html/Doc-And-Go/templates/speciality/show.html.twig");
    }
}
