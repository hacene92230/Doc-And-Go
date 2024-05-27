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

/* appointment/all.html.twig */
class __TwigTemplate_0b461739f959b86d6323afef60b1d069 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/all.html.twig", 1);
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

        yield "Rendez-vous patients";
        
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
        yield "
    <div class=\"container text-center\">
        <h1 class=\"page-title\">Les rendez-vous de mes patients</h1>

        ";
        // line 10
        $context["now"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "U");
        // line 11
        yield "
        <!-- Dropdown pour les rendez-vous à venir -->
        <div class=\"dropdown mb-3 \">
            <button class=\"dropdown-toggle text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\" type=\"button\" id=\"upcomingAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous à venir
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"upcomingAppointmentsDropdown\">
                <div class=\"p-3\">
                    ";
        // line 19
        $context["has_upcoming_appointments"] = false;
        // line 20
        yield "                    ";
        $context["current_date"] = null;
        // line 21
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 22
            yield "                        ";
            if ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 22), "U") >= (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 22, $this->source); })()))) {
                // line 23
                yield "                            ";
                $context["has_upcoming_appointments"] = true;
                // line 24
                yield "                            ";
                $context["appointment_date"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 24), "d/m/Y");
                // line 25
                yield "                            ";
                if (((isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 25, $this->source); })()) != (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 25, $this->source); })()))) {
                    // line 26
                    yield "                                ";
                    if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 26, $this->source); })()))) {
                        // line 27
                        yield "                                    </div>
                                ";
                    }
                    // line 29
                    yield "                                ";
                    $context["current_date"] = (isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 29, $this->source); })());
                    // line 30
                    yield "                                <div class=\"date-group\">
                                    <h3 class=\"date-title\">";
                    // line 31
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 31, $this->source); })()), "html", null, true);
                    yield "</h3>
                                    <div class=\"appointments\">
                            ";
                }
                // line 34
                yield "                            <!-- Affichage de chaque rendez-vous à venir ... -->
                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> ";
                // line 38
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 38), "H:i"), "html", null, true);
                yield "
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> ";
                // line 42
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "comment", [], "any", false, false, false, 42), "html", null, true);
                yield "
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"";
                // line 46
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" class=\"user-link\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 46), "firstName", [], "any", false, false, false, 46), "html", null, true);
                yield "</a>
                                </div>
                                <div class=\"row\">
                                    <h3>Statu (";
                // line 49
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                yield ")</h3>
                                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 50, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["statu"]) {
                    // line 51
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51) != CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 51))) {
                        // line 52
                        yield "                                            <div class=\"col-3\">
                                                <form action=\"";
                        // line 53
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_status_edit", ["appointment" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                        yield "\" method=\"POST\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                    <input type=\"hidden\" name=\"status\" value=\"";
                        // line 55
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 55), "html", null, true);
                        yield "\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">";
                        // line 56
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 56), "html", null, true);
                        yield "</button>
                                                </form>
                                            </div>
                                        ";
                    }
                    // line 60
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "                                </div>
                            </div>
                        ";
            }
            // line 64
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    ";
        if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 65, $this->source); })()))) {
            // line 66
            yield "                        </div>
                    ";
        }
        // line 68
        yield "                    ";
        if ( !(isset($context["has_upcoming_appointments"]) || array_key_exists("has_upcoming_appointments", $context) ? $context["has_upcoming_appointments"] : (function () { throw new RuntimeError('Variable "has_upcoming_appointments" does not exist.', 68, $this->source); })())) {
            // line 69
            yield "                        <p class=\"no-appointments text-2xl bold\">Aucun rendez-vous à venir à afficher.</p>
                    ";
        }
        // line 71
        yield "                </div>
            </div>
        </div>

        <!-- Dropdown pour les rendez-vous passés -->
        <div class=\"dropdown mb-3 \">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"pastAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous passés
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"pastAppointmentsDropdown\">
                <div class=\"p-3 \">
                    ";
        // line 82
        $context["has_past_appointments"] = false;
        // line 83
        yield "                    ";
        $context["current_date"] = null;
        // line 84
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 85
            yield "                        ";
            if ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 85), "U") < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 85, $this->source); })()))) {
                // line 86
                yield "                            ";
                $context["has_past_appointments"] = true;
                // line 87
                yield "                            ";
                $context["appointment_date"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 87), "d/m/Y");
                // line 88
                yield "                            ";
                if (((isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 88, $this->source); })()) != (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 88, $this->source); })()))) {
                    // line 89
                    yield "                                ";
                    if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 89, $this->source); })()))) {
                        // line 90
                        yield "                                    </div>
                                ";
                    }
                    // line 92
                    yield "                                ";
                    $context["current_date"] = (isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 92, $this->source); })());
                    // line 93
                    yield "                                <div class=\"date-group\">
                                    <h3 class=\"date-title font-bold\">";
                    // line 94
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 94, $this->source); })()), "html", null, true);
                    yield "</h3>
                                    <div class=\"appointments bg-white my-16 border-2 border-black\">
                            ";
                }
                // line 97
                yield "                            <!-- Affichage de chaque rendez-vous passé ... -->
                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> ";
                // line 101
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 101), "H:i"), "html", null, true);
                yield "
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> ";
                // line 105
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "comment", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"";
                // line 109
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\" class=\"user-link\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 109), "firstName", [], "any", false, false, false, 109), "html", null, true);
                yield "</a>
                                </div>
                                <div class=\"row\">
                                    <h3>Statu (";
                // line 112
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
                yield ")</h3>
                                    ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 113, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["statu"]) {
                    // line 114
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114) != CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 114))) {
                        // line 115
                        yield "                                            <div class=\"col-3\">
                                                <form action=\"";
                        // line 116
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_status_edit", ["appointment" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                        yield "\" method=\"POST\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                    <input type=\"hidden\" name=\"status\" value=\"";
                        // line 118
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 118), "html", null, true);
                        yield "\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">";
                        // line 119
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 119), "html", null, true);
                        yield "</button>
                                                </form>
                                            </div>
                                        ";
                    }
                    // line 123
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                yield "                                </div>
                            </div>
                        ";
            }
            // line 127
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "                    ";
        if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 128, $this->source); })()))) {
            // line 129
            yield "                        </div>
                    ";
        }
        // line 131
        yield "                    ";
        if ( !(isset($context["has_past_appointments"]) || array_key_exists("has_past_appointments", $context) ? $context["has_past_appointments"] : (function () { throw new RuntimeError('Variable "has_past_appointments" does not exist.', 131, $this->source); })())) {
            // line 132
            yield "                        <p class=\"no-appointments\">Aucun rendez-vous passé à afficher.</p>
                    ";
        }
        // line 134
        yield "                </div>
            </div>
        </div>
    </div>

<script>
    \$(document).ready(function() {
        // Fonction pour changer l'état du bouton
        function toggleButtonState(\$button, isOpen) {
            if (isOpen) {
                \$button.attr('aria-expanded', 'true');
            } else {
                \$button.attr('aria-expanded', 'false');
            }
        }

        // Fermer tous les dropdowns au chargement de la page
        \$('.dropdown-menu').slideUp(0);

        // Initialiser l'état du bouton au chargement de la page
        \$('.dropdown-toggle').each(function() {
            var \$dropdownToggle = \$(this);
            toggleButtonState(\$dropdownToggle, false);
        });

        // Ouvrir ou fermer le dropdown au clic sur le bouton
        \$('.dropdown-toggle').click(function() {
            var \$dropdownToggle = \$(this);
            var \$dropdownMenu = \$dropdownToggle.next('.dropdown-menu');
            var isOpen = \$dropdownMenu.is(':visible');
            \$dropdownMenu.slideToggle(200, function() {
                isOpen = !isOpen; // Inverser l'état après l'animation
                toggleButtonState(\$dropdownToggle, isOpen);
            });
        });

        // Fermer le dropdown si l'utilisateur clique en dehors
        \$(document).on('click', function(e) {
            if (!\$(e.target).closest('.dropdown').length) {
                \$('.dropdown-menu').slideUp(200);
                \$('.dropdown-toggle').each(function() {
                    toggleButtonState(\$(this), false);
                });
            }
        });

        // Empêcher la fermeture du dropdown si l'utilisateur clique à l'intérieur
        \$('.dropdown-menu').on('click', function(e) {
            e.stopPropagation();
        });

        // Capturer la sélection d'un élément dans le dropdown
        \$('.dropdown-menu').on('click', 'button', function() {
            var selectedValue = \$(this).text();
            // Faire quelque chose avec la valeur sélectionnée, comme l'envoyer au serveur par AJAX
            console.log(selectedValue);
        });
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
        return "appointment/all.html.twig";
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
        return array (  381 => 134,  377 => 132,  374 => 131,  370 => 129,  367 => 128,  361 => 127,  356 => 124,  350 => 123,  343 => 119,  339 => 118,  334 => 116,  331 => 115,  328 => 114,  324 => 113,  320 => 112,  312 => 109,  305 => 105,  298 => 101,  292 => 97,  286 => 94,  283 => 93,  280 => 92,  276 => 90,  273 => 89,  270 => 88,  267 => 87,  264 => 86,  261 => 85,  256 => 84,  253 => 83,  251 => 82,  238 => 71,  234 => 69,  231 => 68,  227 => 66,  224 => 65,  218 => 64,  213 => 61,  207 => 60,  200 => 56,  196 => 55,  191 => 53,  188 => 52,  185 => 51,  181 => 50,  177 => 49,  169 => 46,  162 => 42,  155 => 38,  149 => 34,  143 => 31,  140 => 30,  137 => 29,  133 => 27,  130 => 26,  127 => 25,  124 => 24,  121 => 23,  118 => 22,  113 => 21,  110 => 20,  108 => 19,  98 => 11,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rendez-vous patients{% endblock %}

{% block body %}

    <div class=\"container text-center\">
        <h1 class=\"page-title\">Les rendez-vous de mes patients</h1>

        {% set now = \"now\"|date(\"U\") %}

        <!-- Dropdown pour les rendez-vous à venir -->
        <div class=\"dropdown mb-3 \">
            <button class=\"dropdown-toggle text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\" type=\"button\" id=\"upcomingAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous à venir
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"upcomingAppointmentsDropdown\">
                <div class=\"p-3\">
                    {% set has_upcoming_appointments = false %}
                    {% set current_date = null %}
                    {% for appointment in appointments %}
                        {% if appointment.dateTime|date(\"U\") >= now %}
                            {% set has_upcoming_appointments = true %}
                            {% set appointment_date = appointment.dateTime|date('d/m/Y') %}
                            {% if appointment_date != current_date %}
                                {% if current_date is not null %}
                                    </div>
                                {% endif %}
                                {% set current_date = appointment_date %}
                                <div class=\"date-group\">
                                    <h3 class=\"date-title\">{{ current_date }}</h3>
                                    <div class=\"appointments\">
                            {% endif %}
                            <!-- Affichage de chaque rendez-vous à venir ... -->
                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> {{ appointment.dateTime|date('H:i') }}
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> {{ appointment.comment }}
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"{{ path('app_user_show', {'id': appointment.user.id}) }}\" class=\"user-link\">{{ appointment.user.firstName }}</a>
                                </div>
                                <div class=\"row\">
                                    <h3>Statu ({{ appointment.statu.name }})</h3>
                                    {% for statu in statusList %}
                                        {% if appointment.statu.name != statu.name %}
                                            <div class=\"col-3\">
                                                <form action=\"{{ path('app_status_edit', {'appointment': appointment.id}) }}\" method=\"POST\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                    <input type=\"hidden\" name=\"status\" value=\"{{ statu.name }}\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">{{ statu.name }}</button>
                                                </form>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                    {% if current_date is not null %}
                        </div>
                    {% endif %}
                    {% if not has_upcoming_appointments %}
                        <p class=\"no-appointments text-2xl bold\">Aucun rendez-vous à venir à afficher.</p>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Dropdown pour les rendez-vous passés -->
        <div class=\"dropdown mb-3 \">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"pastAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous passés
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"pastAppointmentsDropdown\">
                <div class=\"p-3 \">
                    {% set has_past_appointments = false %}
                    {% set current_date = null %}
                    {% for appointment in appointments %}
                        {% if appointment.dateTime|date(\"U\") < now %}
                            {% set has_past_appointments = true %}
                            {% set appointment_date = appointment.dateTime|date('d/m/Y') %}
                            {% if appointment_date != current_date %}
                                {% if current_date is not null %}
                                    </div>
                                {% endif %}
                                {% set current_date = appointment_date %}
                                <div class=\"date-group\">
                                    <h3 class=\"date-title font-bold\">{{ current_date }}</h3>
                                    <div class=\"appointments bg-white my-16 border-2 border-black\">
                            {% endif %}
                            <!-- Affichage de chaque rendez-vous passé ... -->
                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> {{ appointment.dateTime|date('H:i') }}
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> {{ appointment.comment }}
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"{{ path('app_user_show', {'id': appointment.user.id}) }}\" class=\"user-link\">{{ appointment.user.firstName }}</a>
                                </div>
                                <div class=\"row\">
                                    <h3>Statu ({{ appointment.statu.name }})</h3>
                                    {% for statu in statusList %}
                                        {% if appointment.statu.name != statu.name %}
                                            <div class=\"col-3\">
                                                <form action=\"{{ path('app_status_edit', {'appointment': appointment.id}) }}\" method=\"POST\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                    <input type=\"hidden\" name=\"status\" value=\"{{ statu.name }}\">
                                                    <button type=\"submit\" class=\"btn btn-primary\">{{ statu.name }}</button>
                                                </form>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                    {% if current_date is not null %}
                        </div>
                    {% endif %}
                    {% if not has_past_appointments %}
                        <p class=\"no-appointments\">Aucun rendez-vous passé à afficher.</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

<script>
    \$(document).ready(function() {
        // Fonction pour changer l'état du bouton
        function toggleButtonState(\$button, isOpen) {
            if (isOpen) {
                \$button.attr('aria-expanded', 'true');
            } else {
                \$button.attr('aria-expanded', 'false');
            }
        }

        // Fermer tous les dropdowns au chargement de la page
        \$('.dropdown-menu').slideUp(0);

        // Initialiser l'état du bouton au chargement de la page
        \$('.dropdown-toggle').each(function() {
            var \$dropdownToggle = \$(this);
            toggleButtonState(\$dropdownToggle, false);
        });

        // Ouvrir ou fermer le dropdown au clic sur le bouton
        \$('.dropdown-toggle').click(function() {
            var \$dropdownToggle = \$(this);
            var \$dropdownMenu = \$dropdownToggle.next('.dropdown-menu');
            var isOpen = \$dropdownMenu.is(':visible');
            \$dropdownMenu.slideToggle(200, function() {
                isOpen = !isOpen; // Inverser l'état après l'animation
                toggleButtonState(\$dropdownToggle, isOpen);
            });
        });

        // Fermer le dropdown si l'utilisateur clique en dehors
        \$(document).on('click', function(e) {
            if (!\$(e.target).closest('.dropdown').length) {
                \$('.dropdown-menu').slideUp(200);
                \$('.dropdown-toggle').each(function() {
                    toggleButtonState(\$(this), false);
                });
            }
        });

        // Empêcher la fermeture du dropdown si l'utilisateur clique à l'intérieur
        \$('.dropdown-menu').on('click', function(e) {
            e.stopPropagation();
        });

        // Capturer la sélection d'un élément dans le dropdown
        \$('.dropdown-menu').on('click', 'button', function() {
            var selectedValue = \$(this).text();
            // Faire quelque chose avec la valeur sélectionnée, comme l'envoyer au serveur par AJAX
            console.log(selectedValue);
        });
    });
</script>

{% endblock %}", "appointment/all.html.twig", "/var/www/html/doc-and-go/templates/appointment/all.html.twig");
    }
}
