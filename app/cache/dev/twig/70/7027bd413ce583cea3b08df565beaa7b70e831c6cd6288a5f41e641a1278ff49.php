<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Common/footer.html.twig */
class __TwigTemplate_c5453f4505d71d90c47d1816a35f60ca6cdfa521cf13eeb0217c3e120ee2c252 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/footer.html.twig"));

        // line 1
        echo "<section id=\"footer-sec\">
    <div class=\"container\">
        <div class=\"row  pad-bottom\">
            <div class=\"col-md-4\">
                <h4><strong>クラシックシンフォニー楽団</strong></h4>
                <p>
                    1850年に設立された歴史のある楽団です。
                </p>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\">詳細</a>
            </div>
            <div class=\"col-md-4\">
                <h4><strong>ソーシャルメディア</strong></h4>
                <p>
                    <a href=\"#\"><i class=\"fa fa-facebook-square fa-3x\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter-square fa-3x\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-linkedin-square fa-3x\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-google-plus-square fa-3x\"></i></a>
                </p>
            </div>
            <div class=\"col-md-4\">
                <h4><strong>連絡先</strong></h4>
                <p>
                    東京都新宿区市谷左内町21-13<br/>
                </p>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_toppage_index");
        echo "\">お問い合わせ</a>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  43 => 9,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer-sec\">
    <div class=\"container\">
        <div class=\"row  pad-bottom\">
            <div class=\"col-md-4\">
                <h4><strong>クラシックシンフォニー楽団</strong></h4>
                <p>
                    1850年に設立された歴史のある楽団です。
                </p>
                <a href=\"{{ path(\"app_toppage_index\") }}\">詳細</a>
            </div>
            <div class=\"col-md-4\">
                <h4><strong>ソーシャルメディア</strong></h4>
                <p>
                    <a href=\"#\"><i class=\"fa fa-facebook-square fa-3x\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter-square fa-3x\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-linkedin-square fa-3x\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-google-plus-square fa-3x\"></i></a>
                </p>
            </div>
            <div class=\"col-md-4\">
                <h4><strong>連絡先</strong></h4>
                <p>
                    東京都新宿区市谷左内町21-13<br/>
                </p>
                <a href=\"{{ path(\"app_toppage_index\") }}\">お問い合わせ</a>
            </div>
        </div>
    </div>
</section>
", "Common/footer.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Common/footer.html.twig");
    }
}
