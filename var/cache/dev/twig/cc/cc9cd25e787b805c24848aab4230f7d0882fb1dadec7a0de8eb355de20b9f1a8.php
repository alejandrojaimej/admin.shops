<?php

/* login/index.html.twig */
class __TwigTemplate_f3360d2173f28b6ecbfeb750f9c8f60ebfd21f4342d9b11872ea27059108cbab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("cleanBase.html.twig", "login/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageStyles' => array($this, 'block_pageStyles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "cleanBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 3, $this->source); })()), "section_title", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_pageStyles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageStyles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageStyles"));

        // line 5
        echo "    <link href=\"assets/bootstrap/global/plugins/select2/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/bootstrap/global/plugins/select2/css/select2-bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/bootstrap/pages/css/login-2.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/bootstrap/global/css/components-md.min.css\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\">
    <link href=\"assets/bootstrap/global/css/plugins-md.min.css\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<div class=\"logo\">
    <a href=\"index.html\">
        <img src=\"assets/bootstrap/pages/img/logo-big-white.png\" style=\"height: 17px;\" alt=\"\"> </a>
</div>
<div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            <form class=\"login-form\" action=\"\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"form-title\">
                    <span class=\"form-title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 22, $this->source); })()), "section_h1", array()), "html", null, true);
        echo "</span>
                </div>
                ";
        // line 24
        if ((isset($context["errorText"]) || array_key_exists("errorText", $context) ? $context["errorText"] : (function () { throw new Twig_Error_Runtime('Variable "errorText" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                    <div class=\"alert alert-danger\">
                        <button class=\"close\" data-close=\"alert\"></button>
                        <span>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 27, $this->source); })()), "error_message", array()), "html", null, true);
            echo "</span>
                    </div>
                ";
        }
        // line 30
        echo "                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 32, $this->source); })()), "email_placeholder", array()), "html", null, true);
        echo "</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"email\" autocomplete=\"off\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 33, $this->source); })()), "email_placeholder", array()), "html", null, true);
        echo "\" name=\"email\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]+\$\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">*************</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"*************\" name=\"pass\"> </div>
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn red btn-block uppercase\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 38, $this->source); })()), "login_button", array()), "html", null, true);
        echo "</button>
                </div>
                <div class=\"form-actions\">
                    <div class=\"pull-left\">
                        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "/create-account\" class=\"forget-password\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 42, $this->source); })()), "create_account", array()), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"pull-right forget-password-block\">
                        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "/forgot-password\" class=\"forget-password\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 45, $this->source); })()), "forgot_pass", array()), "html", null, true);
        echo "</a>
                    </div>
                </div>
                
                <div class=\"create-account\">
                    <p>
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "/create-account\" class=\"btn-primary btn\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 51, $this->source); })()), "create_account", array()), "html", null, true);
        echo "</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class=\"forget-form\" action=\"index.html\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"form-title\">
                    <span class=\"form-title\">Forget Password ?</span>
                    <span class=\"form-subtitle\">Enter your e-mail to reset it.</span>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\"> </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" class=\"btn btn-primary uppercase pull-right\">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class=\"register-form\" action=\"index.html\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"form-title\">
                    <span class=\"form-title\">Sign Up</span>
                </div>
                <p class=\"hint\"> Enter your personal details below: </p>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Full Name</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Full Name\" name=\"fullname\"> </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label visible-ie8 visible-ie9\">Email</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Email\" name=\"email\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Address</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Address\" name=\"address\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">City/Town</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"City/Town\" name=\"city\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Country</label>
                    <select name=\"country\" class=\"form-control\">
                        <option value=\"\">Country</option>
                        <option value=\"AF\">Afghanistan</option>
                        <option value=\"AL\">Albania</option>
                        <option value=\"DZ\">Algeria</option>
                        <option value=\"AS\">American Samoa</option>
                        <option value=\"AD\">Andorra</option>
                        <option value=\"AO\">Angola</option>
                        <option value=\"AI\">Anguilla</option>
                        <option value=\"AR\">Argentina</option>
                        <option value=\"AM\">Armenia</option>
                        <option value=\"AW\">Aruba</option>
                        <option value=\"AU\">Australia</option>
                        <option value=\"AT\">Austria</option>
                        <option value=\"AZ\">Azerbaijan</option>
                        <option value=\"BS\">Bahamas</option>
                        <option value=\"BH\">Bahrain</option>
                        <option value=\"BD\">Bangladesh</option>
                        <option value=\"BB\">Barbados</option>
                        <option value=\"BY\">Belarus</option>
                        <option value=\"BE\">Belgium</option>
                        <option value=\"BZ\">Belize</option>
                        <option value=\"BJ\">Benin</option>
                        <option value=\"BM\">Bermuda</option>
                        <option value=\"BT\">Bhutan</option>
                        <option value=\"BO\">Bolivia</option>
                        <option value=\"BA\">Bosnia and Herzegowina</option>
                        <option value=\"BW\">Botswana</option>
                        <option value=\"BV\">Bouvet Island</option>
                        <option value=\"BR\">Brazil</option>
                        <option value=\"IO\">British Indian Ocean Territory</option>
                        <option value=\"BN\">Brunei Darussalam</option>
                        <option value=\"BG\">Bulgaria</option>
                        <option value=\"BF\">Burkina Faso</option>
                        <option value=\"BI\">Burundi</option>
                        <option value=\"KH\">Cambodia</option>
                        <option value=\"CM\">Cameroon</option>
                        <option value=\"CA\">Canada</option>
                        <option value=\"CV\">Cape Verde</option>
                        <option value=\"KY\">Cayman Islands</option>
                        <option value=\"CF\">Central African Republic</option>
                        <option value=\"TD\">Chad</option>
                        <option value=\"CL\">Chile</option>
                        <option value=\"CN\">China</option>
                        <option value=\"CX\">Christmas Island</option>
                        <option value=\"CC\">Cocos (Keeling) Islands</option>
                        <option value=\"CO\">Colombia</option>
                        <option value=\"KM\">Comoros</option>
                        <option value=\"CG\">Congo</option>
                        <option value=\"CD\">Congo, the Democratic Republic of the</option>
                        <option value=\"CK\">Cook Islands</option>
                        <option value=\"CR\">Costa Rica</option>
                        <option value=\"CI\">Cote d'Ivoire</option>
                        <option value=\"HR\">Croatia (Hrvatska)</option>
                        <option value=\"CU\">Cuba</option>
                        <option value=\"CY\">Cyprus</option>
                        <option value=\"CZ\">Czech Republic</option>
                        <option value=\"DK\">Denmark</option>
                        <option value=\"DJ\">Djibouti</option>
                        <option value=\"DM\">Dominica</option>
                        <option value=\"DO\">Dominican Republic</option>
                        <option value=\"EC\">Ecuador</option>
                        <option value=\"EG\">Egypt</option>
                        <option value=\"SV\">El Salvador</option>
                        <option value=\"GQ\">Equatorial Guinea</option>
                        <option value=\"ER\">Eritrea</option>
                        <option value=\"EE\">Estonia</option>
                        <option value=\"ET\">Ethiopia</option>
                        <option value=\"FK\">Falkland Islands (Malvinas)</option>
                        <option value=\"FO\">Faroe Islands</option>
                        <option value=\"FJ\">Fiji</option>
                        <option value=\"FI\">Finland</option>
                        <option value=\"FR\">France</option>
                        <option value=\"GF\">French Guiana</option>
                        <option value=\"PF\">French Polynesia</option>
                        <option value=\"TF\">French Southern Territories</option>
                        <option value=\"GA\">Gabon</option>
                        <option value=\"GM\">Gambia</option>
                        <option value=\"GE\">Georgia</option>
                        <option value=\"DE\">Germany</option>
                        <option value=\"GH\">Ghana</option>
                        <option value=\"GI\">Gibraltar</option>
                        <option value=\"GR\">Greece</option>
                        <option value=\"GL\">Greenland</option>
                        <option value=\"GD\">Grenada</option>
                        <option value=\"GP\">Guadeloupe</option>
                        <option value=\"GU\">Guam</option>
                        <option value=\"GT\">Guatemala</option>
                        <option value=\"GN\">Guinea</option>
                        <option value=\"GW\">Guinea-Bissau</option>
                        <option value=\"GY\">Guyana</option>
                        <option value=\"HT\">Haiti</option>
                        <option value=\"HM\">Heard and Mc Donald Islands</option>
                        <option value=\"VA\">Holy See (Vatican City State)</option>
                        <option value=\"HN\">Honduras</option>
                        <option value=\"HK\">Hong Kong</option>
                        <option value=\"HU\">Hungary</option>
                        <option value=\"IS\">Iceland</option>
                        <option value=\"IN\">India</option>
                        <option value=\"ID\">Indonesia</option>
                        <option value=\"IR\">Iran (Islamic Republic of)</option>
                        <option value=\"IQ\">Iraq</option>
                        <option value=\"IE\">Ireland</option>
                        <option value=\"IL\">Israel</option>
                        <option value=\"IT\">Italy</option>
                        <option value=\"JM\">Jamaica</option>
                        <option value=\"JP\">Japan</option>
                        <option value=\"JO\">Jordan</option>
                        <option value=\"KZ\">Kazakhstan</option>
                        <option value=\"KE\">Kenya</option>
                        <option value=\"KI\">Kiribati</option>
                        <option value=\"KP\">Korea, Democratic People's Republic of</option>
                        <option value=\"KR\">Korea, Republic of</option>
                        <option value=\"KW\">Kuwait</option>
                        <option value=\"KG\">Kyrgyzstan</option>
                        <option value=\"LA\">Lao People's Democratic Republic</option>
                        <option value=\"LV\">Latvia</option>
                        <option value=\"LB\">Lebanon</option>
                        <option value=\"LS\">Lesotho</option>
                        <option value=\"LR\">Liberia</option>
                        <option value=\"LY\">Libyan Arab Jamahiriya</option>
                        <option value=\"LI\">Liechtenstein</option>
                        <option value=\"LT\">Lithuania</option>
                        <option value=\"LU\">Luxembourg</option>
                        <option value=\"MO\">Macau</option>
                        <option value=\"MK\">Macedonia, The Former Yugoslav Republic of</option>
                        <option value=\"MG\">Madagascar</option>
                        <option value=\"MW\">Malawi</option>
                        <option value=\"MY\">Malaysia</option>
                        <option value=\"MV\">Maldives</option>
                        <option value=\"ML\">Mali</option>
                        <option value=\"MT\">Malta</option>
                        <option value=\"MH\">Marshall Islands</option>
                        <option value=\"MQ\">Martinique</option>
                        <option value=\"MR\">Mauritania</option>
                        <option value=\"MU\">Mauritius</option>
                        <option value=\"YT\">Mayotte</option>
                        <option value=\"MX\">Mexico</option>
                        <option value=\"FM\">Micronesia, Federated States of</option>
                        <option value=\"MD\">Moldova, Republic of</option>
                        <option value=\"MC\">Monaco</option>
                        <option value=\"MN\">Mongolia</option>
                        <option value=\"MS\">Montserrat</option>
                        <option value=\"MA\">Morocco</option>
                        <option value=\"MZ\">Mozambique</option>
                        <option value=\"MM\">Myanmar</option>
                        <option value=\"NA\">Namibia</option>
                        <option value=\"NR\">Nauru</option>
                        <option value=\"NP\">Nepal</option>
                        <option value=\"NL\">Netherlands</option>
                        <option value=\"AN\">Netherlands Antilles</option>
                        <option value=\"NC\">New Caledonia</option>
                        <option value=\"NZ\">New Zealand</option>
                        <option value=\"NI\">Nicaragua</option>
                        <option value=\"NE\">Niger</option>
                        <option value=\"NG\">Nigeria</option>
                        <option value=\"NU\">Niue</option>
                        <option value=\"NF\">Norfolk Island</option>
                        <option value=\"MP\">Northern Mariana Islands</option>
                        <option value=\"NO\">Norway</option>
                        <option value=\"OM\">Oman</option>
                        <option value=\"PK\">Pakistan</option>
                        <option value=\"PW\">Palau</option>
                        <option value=\"PA\">Panama</option>
                        <option value=\"PG\">Papua New Guinea</option>
                        <option value=\"PY\">Paraguay</option>
                        <option value=\"PE\">Peru</option>
                        <option value=\"PH\">Philippines</option>
                        <option value=\"PN\">Pitcairn</option>
                        <option value=\"PL\">Poland</option>
                        <option value=\"PT\">Portugal</option>
                        <option value=\"PR\">Puerto Rico</option>
                        <option value=\"QA\">Qatar</option>
                        <option value=\"RE\">Reunion</option>
                        <option value=\"RO\">Romania</option>
                        <option value=\"RU\">Russian Federation</option>
                        <option value=\"RW\">Rwanda</option>
                        <option value=\"KN\">Saint Kitts and Nevis</option>
                        <option value=\"LC\">Saint LUCIA</option>
                        <option value=\"VC\">Saint Vincent and the Grenadines</option>
                        <option value=\"WS\">Samoa</option>
                        <option value=\"SM\">San Marino</option>
                        <option value=\"ST\">Sao Tome and Principe</option>
                        <option value=\"SA\">Saudi Arabia</option>
                        <option value=\"SN\">Senegal</option>
                        <option value=\"SC\">Seychelles</option>
                        <option value=\"SL\">Sierra Leone</option>
                        <option value=\"SG\">Singapore</option>
                        <option value=\"SK\">Slovakia (Slovak Republic)</option>
                        <option value=\"SI\">Slovenia</option>
                        <option value=\"SB\">Solomon Islands</option>
                        <option value=\"SO\">Somalia</option>
                        <option value=\"ZA\">South Africa</option>
                        <option value=\"GS\">South Georgia and the South Sandwich Islands</option>
                        <option value=\"ES\">Spain</option>
                        <option value=\"LK\">Sri Lanka</option>
                        <option value=\"SH\">St. Helena</option>
                        <option value=\"PM\">St. Pierre and Miquelon</option>
                        <option value=\"SD\">Sudan</option>
                        <option value=\"SR\">Suriname</option>
                        <option value=\"SJ\">Svalbard and Jan Mayen Islands</option>
                        <option value=\"SZ\">Swaziland</option>
                        <option value=\"SE\">Sweden</option>
                        <option value=\"CH\">Switzerland</option>
                        <option value=\"SY\">Syrian Arab Republic</option>
                        <option value=\"TW\">Taiwan, Province of China</option>
                        <option value=\"TJ\">Tajikistan</option>
                        <option value=\"TZ\">Tanzania, United Republic of</option>
                        <option value=\"TH\">Thailand</option>
                        <option value=\"TG\">Togo</option>
                        <option value=\"TK\">Tokelau</option>
                        <option value=\"TO\">Tonga</option>
                        <option value=\"TT\">Trinidad and Tobago</option>
                        <option value=\"TN\">Tunisia</option>
                        <option value=\"TR\">Turkey</option>
                        <option value=\"TM\">Turkmenistan</option>
                        <option value=\"TC\">Turks and Caicos Islands</option>
                        <option value=\"TV\">Tuvalu</option>
                        <option value=\"UG\">Uganda</option>
                        <option value=\"UA\">Ukraine</option>
                        <option value=\"AE\">United Arab Emirates</option>
                        <option value=\"GB\">United Kingdom</option>
                        <option value=\"US\">United States</option>
                        <option value=\"UM\">United States Minor Outlying Islands</option>
                        <option value=\"UY\">Uruguay</option>
                        <option value=\"UZ\">Uzbekistan</option>
                        <option value=\"VU\">Vanuatu</option>
                        <option value=\"VE\">Venezuela</option>
                        <option value=\"VN\">Viet Nam</option>
                        <option value=\"VG\">Virgin Islands (British)</option>
                        <option value=\"VI\">Virgin Islands (U.S.)</option>
                        <option value=\"WF\">Wallis and Futuna Islands</option>
                        <option value=\"EH\">Western Sahara</option>
                        <option value=\"YE\">Yemen</option>
                        <option value=\"ZM\">Zambia</option>
                        <option value=\"ZW\">Zimbabwe</option>
                    </select>
                </div>
                <p class=\"hint\"> Enter your account details below: </p>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"username\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" id=\"register_password\" placeholder=\"Password\" name=\"password\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Re-type Your Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Re-type Your Password\" name=\"rpassword\"> </div>
                <div class=\"form-group margin-top-20 margin-bottom-20\">
                    <label class=\"mt-checkbox mt-checkbox-outline\">
                        <input type=\"checkbox\" name=\"tnc\"> I agree to the
                        <a href=\"javascript:;\">Terms of Service </a> &amp;
                        <a href=\"javascript:;\">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id=\"register_tnc_error\"> </div>
                </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"register-back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" id=\"register-submit-btn\" class=\"btn red uppercase pull-right\">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  156 => 45,  148 => 42,  141 => 38,  133 => 33,  129 => 32,  125 => 30,  119 => 27,  115 => 25,  113 => 24,  108 => 22,  97 => 13,  88 => 12,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'cleanBase.html.twig' %}

{% block title %}{{ text.section_title }}{% endblock %}
{% block pageStyles %}
    <link href=\"assets/bootstrap/global/plugins/select2/css/select2.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/bootstrap/global/plugins/select2/css/select2-bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/bootstrap/pages/css/login-2.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"assets/bootstrap/global/css/components-md.min.css\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\">
    <link href=\"assets/bootstrap/global/css/plugins-md.min.css\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}

{% block body %}

<div class=\"logo\">
    <a href=\"index.html\">
        <img src=\"assets/bootstrap/pages/img/logo-big-white.png\" style=\"height: 17px;\" alt=\"\"> </a>
</div>
<div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            <form class=\"login-form\" action=\"\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"form-title\">
                    <span class=\"form-title\">{{text.section_h1}}</span>
                </div>
                {% if errorText  %}
                    <div class=\"alert alert-danger\">
                        <button class=\"close\" data-close=\"alert\"></button>
                        <span>{{text.error_message}}</span>
                    </div>
                {% endif %}
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label visible-ie8 visible-ie9\">{{text.email_placeholder}}</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"email\" autocomplete=\"off\" placeholder=\"{{text.email_placeholder}}\" name=\"email\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]+\$\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">*************</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"*************\" name=\"pass\"> </div>
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn red btn-block uppercase\">{{text.login_button}}</button>
                </div>
                <div class=\"form-actions\">
                    <div class=\"pull-left\">
                        <a href=\"{{lang}}/create-account\" class=\"forget-password\">{{text.create_account}}</a>
                    </div>
                    <div class=\"pull-right forget-password-block\">
                        <a href=\"{{lang}}/forgot-password\" class=\"forget-password\">{{text.forgot_pass}}</a>
                    </div>
                </div>
                
                <div class=\"create-account\">
                    <p>
                        <a href=\"{{lang}}/create-account\" class=\"btn-primary btn\">{{text.create_account}}</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class=\"forget-form\" action=\"index.html\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"form-title\">
                    <span class=\"form-title\">Forget Password ?</span>
                    <span class=\"form-subtitle\">Enter your e-mail to reset it.</span>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\"> </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" class=\"btn btn-primary uppercase pull-right\">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class=\"register-form\" action=\"index.html\" method=\"post\" novalidate=\"novalidate\">
                <div class=\"form-title\">
                    <span class=\"form-title\">Sign Up</span>
                </div>
                <p class=\"hint\"> Enter your personal details below: </p>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Full Name</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Full Name\" name=\"fullname\"> </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label visible-ie8 visible-ie9\">Email</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Email\" name=\"email\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Address</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Address\" name=\"address\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">City/Town</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"City/Town\" name=\"city\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Country</label>
                    <select name=\"country\" class=\"form-control\">
                        <option value=\"\">Country</option>
                        <option value=\"AF\">Afghanistan</option>
                        <option value=\"AL\">Albania</option>
                        <option value=\"DZ\">Algeria</option>
                        <option value=\"AS\">American Samoa</option>
                        <option value=\"AD\">Andorra</option>
                        <option value=\"AO\">Angola</option>
                        <option value=\"AI\">Anguilla</option>
                        <option value=\"AR\">Argentina</option>
                        <option value=\"AM\">Armenia</option>
                        <option value=\"AW\">Aruba</option>
                        <option value=\"AU\">Australia</option>
                        <option value=\"AT\">Austria</option>
                        <option value=\"AZ\">Azerbaijan</option>
                        <option value=\"BS\">Bahamas</option>
                        <option value=\"BH\">Bahrain</option>
                        <option value=\"BD\">Bangladesh</option>
                        <option value=\"BB\">Barbados</option>
                        <option value=\"BY\">Belarus</option>
                        <option value=\"BE\">Belgium</option>
                        <option value=\"BZ\">Belize</option>
                        <option value=\"BJ\">Benin</option>
                        <option value=\"BM\">Bermuda</option>
                        <option value=\"BT\">Bhutan</option>
                        <option value=\"BO\">Bolivia</option>
                        <option value=\"BA\">Bosnia and Herzegowina</option>
                        <option value=\"BW\">Botswana</option>
                        <option value=\"BV\">Bouvet Island</option>
                        <option value=\"BR\">Brazil</option>
                        <option value=\"IO\">British Indian Ocean Territory</option>
                        <option value=\"BN\">Brunei Darussalam</option>
                        <option value=\"BG\">Bulgaria</option>
                        <option value=\"BF\">Burkina Faso</option>
                        <option value=\"BI\">Burundi</option>
                        <option value=\"KH\">Cambodia</option>
                        <option value=\"CM\">Cameroon</option>
                        <option value=\"CA\">Canada</option>
                        <option value=\"CV\">Cape Verde</option>
                        <option value=\"KY\">Cayman Islands</option>
                        <option value=\"CF\">Central African Republic</option>
                        <option value=\"TD\">Chad</option>
                        <option value=\"CL\">Chile</option>
                        <option value=\"CN\">China</option>
                        <option value=\"CX\">Christmas Island</option>
                        <option value=\"CC\">Cocos (Keeling) Islands</option>
                        <option value=\"CO\">Colombia</option>
                        <option value=\"KM\">Comoros</option>
                        <option value=\"CG\">Congo</option>
                        <option value=\"CD\">Congo, the Democratic Republic of the</option>
                        <option value=\"CK\">Cook Islands</option>
                        <option value=\"CR\">Costa Rica</option>
                        <option value=\"CI\">Cote d'Ivoire</option>
                        <option value=\"HR\">Croatia (Hrvatska)</option>
                        <option value=\"CU\">Cuba</option>
                        <option value=\"CY\">Cyprus</option>
                        <option value=\"CZ\">Czech Republic</option>
                        <option value=\"DK\">Denmark</option>
                        <option value=\"DJ\">Djibouti</option>
                        <option value=\"DM\">Dominica</option>
                        <option value=\"DO\">Dominican Republic</option>
                        <option value=\"EC\">Ecuador</option>
                        <option value=\"EG\">Egypt</option>
                        <option value=\"SV\">El Salvador</option>
                        <option value=\"GQ\">Equatorial Guinea</option>
                        <option value=\"ER\">Eritrea</option>
                        <option value=\"EE\">Estonia</option>
                        <option value=\"ET\">Ethiopia</option>
                        <option value=\"FK\">Falkland Islands (Malvinas)</option>
                        <option value=\"FO\">Faroe Islands</option>
                        <option value=\"FJ\">Fiji</option>
                        <option value=\"FI\">Finland</option>
                        <option value=\"FR\">France</option>
                        <option value=\"GF\">French Guiana</option>
                        <option value=\"PF\">French Polynesia</option>
                        <option value=\"TF\">French Southern Territories</option>
                        <option value=\"GA\">Gabon</option>
                        <option value=\"GM\">Gambia</option>
                        <option value=\"GE\">Georgia</option>
                        <option value=\"DE\">Germany</option>
                        <option value=\"GH\">Ghana</option>
                        <option value=\"GI\">Gibraltar</option>
                        <option value=\"GR\">Greece</option>
                        <option value=\"GL\">Greenland</option>
                        <option value=\"GD\">Grenada</option>
                        <option value=\"GP\">Guadeloupe</option>
                        <option value=\"GU\">Guam</option>
                        <option value=\"GT\">Guatemala</option>
                        <option value=\"GN\">Guinea</option>
                        <option value=\"GW\">Guinea-Bissau</option>
                        <option value=\"GY\">Guyana</option>
                        <option value=\"HT\">Haiti</option>
                        <option value=\"HM\">Heard and Mc Donald Islands</option>
                        <option value=\"VA\">Holy See (Vatican City State)</option>
                        <option value=\"HN\">Honduras</option>
                        <option value=\"HK\">Hong Kong</option>
                        <option value=\"HU\">Hungary</option>
                        <option value=\"IS\">Iceland</option>
                        <option value=\"IN\">India</option>
                        <option value=\"ID\">Indonesia</option>
                        <option value=\"IR\">Iran (Islamic Republic of)</option>
                        <option value=\"IQ\">Iraq</option>
                        <option value=\"IE\">Ireland</option>
                        <option value=\"IL\">Israel</option>
                        <option value=\"IT\">Italy</option>
                        <option value=\"JM\">Jamaica</option>
                        <option value=\"JP\">Japan</option>
                        <option value=\"JO\">Jordan</option>
                        <option value=\"KZ\">Kazakhstan</option>
                        <option value=\"KE\">Kenya</option>
                        <option value=\"KI\">Kiribati</option>
                        <option value=\"KP\">Korea, Democratic People's Republic of</option>
                        <option value=\"KR\">Korea, Republic of</option>
                        <option value=\"KW\">Kuwait</option>
                        <option value=\"KG\">Kyrgyzstan</option>
                        <option value=\"LA\">Lao People's Democratic Republic</option>
                        <option value=\"LV\">Latvia</option>
                        <option value=\"LB\">Lebanon</option>
                        <option value=\"LS\">Lesotho</option>
                        <option value=\"LR\">Liberia</option>
                        <option value=\"LY\">Libyan Arab Jamahiriya</option>
                        <option value=\"LI\">Liechtenstein</option>
                        <option value=\"LT\">Lithuania</option>
                        <option value=\"LU\">Luxembourg</option>
                        <option value=\"MO\">Macau</option>
                        <option value=\"MK\">Macedonia, The Former Yugoslav Republic of</option>
                        <option value=\"MG\">Madagascar</option>
                        <option value=\"MW\">Malawi</option>
                        <option value=\"MY\">Malaysia</option>
                        <option value=\"MV\">Maldives</option>
                        <option value=\"ML\">Mali</option>
                        <option value=\"MT\">Malta</option>
                        <option value=\"MH\">Marshall Islands</option>
                        <option value=\"MQ\">Martinique</option>
                        <option value=\"MR\">Mauritania</option>
                        <option value=\"MU\">Mauritius</option>
                        <option value=\"YT\">Mayotte</option>
                        <option value=\"MX\">Mexico</option>
                        <option value=\"FM\">Micronesia, Federated States of</option>
                        <option value=\"MD\">Moldova, Republic of</option>
                        <option value=\"MC\">Monaco</option>
                        <option value=\"MN\">Mongolia</option>
                        <option value=\"MS\">Montserrat</option>
                        <option value=\"MA\">Morocco</option>
                        <option value=\"MZ\">Mozambique</option>
                        <option value=\"MM\">Myanmar</option>
                        <option value=\"NA\">Namibia</option>
                        <option value=\"NR\">Nauru</option>
                        <option value=\"NP\">Nepal</option>
                        <option value=\"NL\">Netherlands</option>
                        <option value=\"AN\">Netherlands Antilles</option>
                        <option value=\"NC\">New Caledonia</option>
                        <option value=\"NZ\">New Zealand</option>
                        <option value=\"NI\">Nicaragua</option>
                        <option value=\"NE\">Niger</option>
                        <option value=\"NG\">Nigeria</option>
                        <option value=\"NU\">Niue</option>
                        <option value=\"NF\">Norfolk Island</option>
                        <option value=\"MP\">Northern Mariana Islands</option>
                        <option value=\"NO\">Norway</option>
                        <option value=\"OM\">Oman</option>
                        <option value=\"PK\">Pakistan</option>
                        <option value=\"PW\">Palau</option>
                        <option value=\"PA\">Panama</option>
                        <option value=\"PG\">Papua New Guinea</option>
                        <option value=\"PY\">Paraguay</option>
                        <option value=\"PE\">Peru</option>
                        <option value=\"PH\">Philippines</option>
                        <option value=\"PN\">Pitcairn</option>
                        <option value=\"PL\">Poland</option>
                        <option value=\"PT\">Portugal</option>
                        <option value=\"PR\">Puerto Rico</option>
                        <option value=\"QA\">Qatar</option>
                        <option value=\"RE\">Reunion</option>
                        <option value=\"RO\">Romania</option>
                        <option value=\"RU\">Russian Federation</option>
                        <option value=\"RW\">Rwanda</option>
                        <option value=\"KN\">Saint Kitts and Nevis</option>
                        <option value=\"LC\">Saint LUCIA</option>
                        <option value=\"VC\">Saint Vincent and the Grenadines</option>
                        <option value=\"WS\">Samoa</option>
                        <option value=\"SM\">San Marino</option>
                        <option value=\"ST\">Sao Tome and Principe</option>
                        <option value=\"SA\">Saudi Arabia</option>
                        <option value=\"SN\">Senegal</option>
                        <option value=\"SC\">Seychelles</option>
                        <option value=\"SL\">Sierra Leone</option>
                        <option value=\"SG\">Singapore</option>
                        <option value=\"SK\">Slovakia (Slovak Republic)</option>
                        <option value=\"SI\">Slovenia</option>
                        <option value=\"SB\">Solomon Islands</option>
                        <option value=\"SO\">Somalia</option>
                        <option value=\"ZA\">South Africa</option>
                        <option value=\"GS\">South Georgia and the South Sandwich Islands</option>
                        <option value=\"ES\">Spain</option>
                        <option value=\"LK\">Sri Lanka</option>
                        <option value=\"SH\">St. Helena</option>
                        <option value=\"PM\">St. Pierre and Miquelon</option>
                        <option value=\"SD\">Sudan</option>
                        <option value=\"SR\">Suriname</option>
                        <option value=\"SJ\">Svalbard and Jan Mayen Islands</option>
                        <option value=\"SZ\">Swaziland</option>
                        <option value=\"SE\">Sweden</option>
                        <option value=\"CH\">Switzerland</option>
                        <option value=\"SY\">Syrian Arab Republic</option>
                        <option value=\"TW\">Taiwan, Province of China</option>
                        <option value=\"TJ\">Tajikistan</option>
                        <option value=\"TZ\">Tanzania, United Republic of</option>
                        <option value=\"TH\">Thailand</option>
                        <option value=\"TG\">Togo</option>
                        <option value=\"TK\">Tokelau</option>
                        <option value=\"TO\">Tonga</option>
                        <option value=\"TT\">Trinidad and Tobago</option>
                        <option value=\"TN\">Tunisia</option>
                        <option value=\"TR\">Turkey</option>
                        <option value=\"TM\">Turkmenistan</option>
                        <option value=\"TC\">Turks and Caicos Islands</option>
                        <option value=\"TV\">Tuvalu</option>
                        <option value=\"UG\">Uganda</option>
                        <option value=\"UA\">Ukraine</option>
                        <option value=\"AE\">United Arab Emirates</option>
                        <option value=\"GB\">United Kingdom</option>
                        <option value=\"US\">United States</option>
                        <option value=\"UM\">United States Minor Outlying Islands</option>
                        <option value=\"UY\">Uruguay</option>
                        <option value=\"UZ\">Uzbekistan</option>
                        <option value=\"VU\">Vanuatu</option>
                        <option value=\"VE\">Venezuela</option>
                        <option value=\"VN\">Viet Nam</option>
                        <option value=\"VG\">Virgin Islands (British)</option>
                        <option value=\"VI\">Virgin Islands (U.S.)</option>
                        <option value=\"WF\">Wallis and Futuna Islands</option>
                        <option value=\"EH\">Western Sahara</option>
                        <option value=\"YE\">Yemen</option>
                        <option value=\"ZM\">Zambia</option>
                        <option value=\"ZW\">Zimbabwe</option>
                    </select>
                </div>
                <p class=\"hint\"> Enter your account details below: </p>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"username\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" id=\"register_password\" placeholder=\"Password\" name=\"password\"> </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Re-type Your Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Re-type Your Password\" name=\"rpassword\"> </div>
                <div class=\"form-group margin-top-20 margin-bottom-20\">
                    <label class=\"mt-checkbox mt-checkbox-outline\">
                        <input type=\"checkbox\" name=\"tnc\"> I agree to the
                        <a href=\"javascript:;\">Terms of Service </a> &amp;
                        <a href=\"javascript:;\">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id=\"register_tnc_error\"> </div>
                </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"register-back-btn\" class=\"btn btn-default\">Back</button>
                    <button type=\"submit\" id=\"register-submit-btn\" class=\"btn red uppercase pull-right\">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
{% endblock %}
", "login/index.html.twig", "/home/alejandro/Trabajo/shops-admin/templates/login/index.html.twig");
    }
}
