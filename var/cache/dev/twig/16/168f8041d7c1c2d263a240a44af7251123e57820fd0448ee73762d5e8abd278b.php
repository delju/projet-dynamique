<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/register.html.twig */
class __TwigTemplate_7266c4d1082a759cb3851fa9716f797a7cf289552ba5bf55b689920123fe5e1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <section class=\"login py-5 border-top-1\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 col-md-8 align-item-center\">
                    <div class=\"border border\">
                        <h3 class=\"bg-gray p-4\">Register Now</h3>
                        <form action=\"#\">
                            <fieldset class=\"p-4\">
                                <input type=\"text\" name=\"user\" placeholder=\"User\" class=\"border p-3 w-100 my-2\">
                                <input type=\"text\" name=\"lastname\" placeholder=\"Lastname\" class=\"border p-3 w-100 my-2\">
                                <input type=\"text\" name=\"firstname\" placeholder=\"Firstname\" class=\"border p-3 w-100 my-2\">
                                <input type=\"date\" name=\"date\" placeholder=\"Date of birth\" class=\"border p-3 w-100 my-2\">
                                <input type=\"email\" name=\"email\" placeholder=\"Email*\" class=\"border p-3 w-100 my-2\">
                                <input type=\"password\" name=\"password\" placeholder=\"Password*\" class=\"border p-3 w-100 my-2\">
                                <input type=\"password\" name=\"passwordConfirm\" placeholder=\"Confirm Password*\" class=\"border p-3 w-100 my-2\">
                                <div class=\"loggedin-forgot d-inline-flex my-3\">
                                    <input type=\"checkbox\" id=\"registering\" class=\"mt-1\">
                                    <label for=\"registering\" class=\"px-2\">By registering, you accept our <a class=\"text-danger font-weight-bold\" href=\"terms-condition.html\">Terms & Conditions</a></label>
                                </div>
                                <button type=\"submit\" class=\"d-block py-3 px-4 bg-danger text-white border-0 rounded font-weight-bold\">Register Now</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <section class=\"login py-5 border-top-1\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 col-md-8 align-item-center\">
                    <div class=\"border border\">
                        <h3 class=\"bg-gray p-4\">Register Now</h3>
                        <form action=\"#\">
                            <fieldset class=\"p-4\">
                                <input type=\"text\" name=\"user\" placeholder=\"User\" class=\"border p-3 w-100 my-2\">
                                <input type=\"text\" name=\"lastname\" placeholder=\"Lastname\" class=\"border p-3 w-100 my-2\">
                                <input type=\"text\" name=\"firstname\" placeholder=\"Firstname\" class=\"border p-3 w-100 my-2\">
                                <input type=\"date\" name=\"date\" placeholder=\"Date of birth\" class=\"border p-3 w-100 my-2\">
                                <input type=\"email\" name=\"email\" placeholder=\"Email*\" class=\"border p-3 w-100 my-2\">
                                <input type=\"password\" name=\"password\" placeholder=\"Password*\" class=\"border p-3 w-100 my-2\">
                                <input type=\"password\" name=\"passwordConfirm\" placeholder=\"Confirm Password*\" class=\"border p-3 w-100 my-2\">
                                <div class=\"loggedin-forgot d-inline-flex my-3\">
                                    <input type=\"checkbox\" id=\"registering\" class=\"mt-1\">
                                    <label for=\"registering\" class=\"px-2\">By registering, you accept our <a class=\"text-danger font-weight-bold\" href=\"terms-condition.html\">Terms & Conditions</a></label>
                                </div>
                                <button type=\"submit\" class=\"d-block py-3 px-4 bg-danger text-white border-0 rounded font-weight-bold\">Register Now</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock content %}", "pages/register.html.twig", "/home/delvauxjulene/projet_dynamqiue-0305feaf41799d1708c7702a120c054be1a34d54/templates/pages/register.html.twig");
    }
}
