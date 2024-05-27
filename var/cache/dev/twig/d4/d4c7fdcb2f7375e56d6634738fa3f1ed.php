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
class __TwigTemplate_c57394e92e3d5897e4b14578df5293d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "speciality/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "speciality/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "speciality/index.html.twig", 1);
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

        yield "Nos spécialitées médicales ";
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
        yield "<h1>Spécialités</h1>
    <style>
        .speciality {
            display: none;

        }
        #pagination-controls {
            margin-top: 20px;
            text-align: center;
        }
        #prev-btn, #next-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin: 5px;
        }
        #prev-btn:disabled, #next-btn:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }
    </style>
    <div id=\"specialities-container\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["specialities"]) || array_key_exists("specialities", $context) ? $context["specialities"] : (function () { throw new RuntimeError('Variable "specialities" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["speciality"]) {
            // line 31
            yield "            <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_speciality_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"speciality\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["speciality"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['speciality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </div>
    <div id=\"pagination-controls\">
        <button id=\"prev-btn\">Précédent</button>
        <button id=\"next-btn\">Suivant</button>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var itemsPerPage = 5;
            var currentPage = 1;
            var totalItems = \$('.speciality').length;
            var totalPages = Math.ceil(totalItems / itemsPerPage);

            function showPage(page) {
                \$('.speciality').hide();
                var start = (page - 1) * itemsPerPage;
                var end = start + itemsPerPage;
                \$('.speciality').slice(start, end).show();
                currentPage = page;
                updateButtons();
            }

            function updateButtons() {
                \$('#prev-btn').prop('disabled', currentPage === 1);
                \$('#next-btn').prop('disabled', currentPage === totalPages);
            }

            \$('#prev-btn').click(function() {
                if (currentPage > 1) {
                    showPage(currentPage - 1);
                }
            });

            \$('#next-btn').click(function() {
                if (currentPage < totalPages) {
                    showPage(currentPage + 1);
                }
            });

            // Show the first page initially
            showPage(1);
        });
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
        return array (  133 => 33,  122 => 31,  118 => 30,  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos spécialitées médicales {{ parent() }} {% endblock %}

{% block body %}
<h1>Spécialités</h1>
    <style>
        .speciality {
            display: none;

        }
        #pagination-controls {
            margin-top: 20px;
            text-align: center;
        }
        #prev-btn, #next-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin: 5px;
        }
        #prev-btn:disabled, #next-btn:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }
    </style>
    <div id=\"specialities-container\">
        {% for speciality in specialities %}
            <a href=\"{{ path('app_speciality_show', {'id': speciality.id}) }}\" class=\"speciality\">{{ speciality.name }}</a>
        {% endfor %}
    </div>
    <div id=\"pagination-controls\">
        <button id=\"prev-btn\">Précédent</button>
        <button id=\"next-btn\">Suivant</button>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            var itemsPerPage = 5;
            var currentPage = 1;
            var totalItems = \$('.speciality').length;
            var totalPages = Math.ceil(totalItems / itemsPerPage);

            function showPage(page) {
                \$('.speciality').hide();
                var start = (page - 1) * itemsPerPage;
                var end = start + itemsPerPage;
                \$('.speciality').slice(start, end).show();
                currentPage = page;
                updateButtons();
            }

            function updateButtons() {
                \$('#prev-btn').prop('disabled', currentPage === 1);
                \$('#next-btn').prop('disabled', currentPage === totalPages);
            }

            \$('#prev-btn').click(function() {
                if (currentPage > 1) {
                    showPage(currentPage - 1);
                }
            });

            \$('#next-btn').click(function() {
                if (currentPage < totalPages) {
                    showPage(currentPage + 1);
                }
            });

            // Show the first page initially
            showPage(1);
        });
    </script>
    {% endblock %}
", "speciality/index.html.twig", "/var/www/html/doc-and-go/templates/speciality/index.html.twig");
    }
}
