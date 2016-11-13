<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 26/08/2016
 * Hora: 00:52
 */

namespace eKutivaSolutions\Core\Traits\Model;


use App\AcademicDegree;
use App\Bank;
use App\BankAccount;
use App\Branch;
use App\City;
use App\Country;
use App\Course;
use App\CourseType;
use App\Curriculum;
use App\Discipline;
use App\DisciplineType;
use App\EmployeeCategory;
use App\EmployeeRole;
use App\Menu;
use App\PaymentMethod;
use App\Periods;
use App\Regime;
use App\Role;
use App\ScholarshipInstitution;
use App\ScholarshipType;
use App\ScientificField;
use App\State;
use App\UserType;

trait Listed
{
    public function listMonths()
    {
        return [
            '01' => 'Janeiro',
            '02' => 'Fevereiro',
            '03' => 'Março',
            '04' => 'Abril',
            '05' => 'Maio',
            '06' => 'Junho',
            '07' => 'Julho',
            '08' => 'Agosto',
            '09' => 'Setembro',
            '10' => 'Outubro',
            '11' => 'Novembro',
            '12' => 'Dezembro',
        ];
    }

    public function listAcademicDegrees()
    {
        return AcademicDegree::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listCourseTypes()
    {
        return CourseType::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listScientificFields()
    {
        return ScientificField::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listCities($state = [])
    {
        if ($state) return City::whereIn('state_id', $state)->get(['id', 'name'])->pluck('name', 'id');

        return City::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listStates($country = null, $indexes = false)
    {
        if ($country) {
            $states = State::where('country_id', $country)->get(['id', 'name']);

            if ($indexes) return $states->pluck('id');

            return $states->pluck('name', 'id');
        }

        return State::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listRoles()
    {
        return Role::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listUserTypes()
    {
        return UserType::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listBranches($all = false)
    {
        ($all) ? $results = Branch::get(['id', 'name'])->pluck('name', 'id')
            : $results = Branch::WhereBelongs()->get(['id', 'name'])->pluck('name', 'id');

        return $results;
    }

    public function listBanks()
    {
        return Bank::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listCountries()
    {
        return Country::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listRegimes()
    {
        return Regime::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listCurricula()
    {
        return Curriculum::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listCourses()
    {
        return Course::sameCompany()->get(['id', 'name'])->pluck('name', 'id');
    }

    public function listEmployeeCategories()
    {
        return EmployeeCategory::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listEmployeeRoles()
    {
        return EmployeeRole::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listDisciplines()
    {
        return Discipline::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listDisciplineTypes()
    {
        return DisciplineType::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listPeriods()
    {
        return Periods::orderBy('id', 'desc')->get(['id'])->pluck('id', 'id');
    }

    public function listBankAccounts()
    {
        $result = [];

        $accounts = BankAccount::sameBranch()->with(['Bank' => function ($q) {
            $q->select(['id', 'slug']);
        }])->get(['id', 'account_number', 'bank_id']);

        foreach ($accounts as $account) {
            $result[$account->id] = $account->bank->slug . ' - ' . $account->account_number;
        }

        return $result;
    }

    public function listPaymentMethods()
    {
        return PaymentMethod::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listMenus()
    {
        return Menu::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listScholarships()
    {
        return ScholarshipType::get(['id', 'name'])->pluck('name', 'id');
    }

    public function listInstitutions()
    {
        return ScholarshipInstitution::get(['id', 'name'])->pluck('name', 'id');
    }

}