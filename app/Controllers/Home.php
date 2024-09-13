<?php

namespace App\Controllers;
use App\Models\SurveyModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header') . view('index');
    }
    public function Survey(): string
    {
        return view('survey');
    }

    public function Overview(): string
    {
        return view('header') . view('overview');
    }

    public function OurInspiration(): string
    {
        return view('header') . view('our_inspiration');
    }
    public function VisionAndMission(): string
    {
        return view('header') . view('vision_and_mission');
    }

    public function TargetAudience(): string
    {
        return view('header') . view('target_audience');
    }

    public function NewRetirementTrends(): string
    {
        return view('header') . view('new_retirement_trends');
    }

    public function ProposedProject(): string
    {
        return view('header') . view('proposed_project');
    }

    public function ServicesAndFacilities(): string
    {
        return view('header') . view('services_and_facilities');
    }

    public function PlanAndElevation(): string
    {
        return view('header') . view('plan_and_elevation');
    }

    public function ProjectLayoutAndFeatures(): string
    {
        return view('header') . view('project_layout_and_features');
    }

    public function CollaborationOptions(): string
    {
        return view('header') . view('collaboration_options');
    }

    public function SubmitSurvey(){

        $json = $this->request->getJSON();


        if (!$json) {
            
            return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)
                ->setJSON(['error' => 'Invalid input']);
        }
        
        

        // Load the SurveyModel
        $surveyModel = new SurveyModel();
        

            // Define the data array
    $data = [
        'organization_name' => $json->organization_name,
        'type_of_organization' => $json->type_of_organization,
        'other_type_of_organization' => $json->other_type_of_organization,
        'registration_number' => $json->registration_number,
        'country_of_registration' => $json->country_of_registration,
        'headquarters_address' => $json->headquarters_address,
        'city' => $json->city,
        'state_or_province' => $json->state_or_province,
        'postal_code' => $json->postal_code,
        'country' => $json->country,
        'phone' => $json->phone,
        'website' => $json->website,
        'primary_contact_person' => $json->primary_contact_person,
        'title_or_position' => $json->title_or_position,
        'email_primary_contact' => $json->email_primary_contact,
        'phone_primary_contact' => $json->phone_primary_contact,
        'collaboration_interest' => $json->collaboration_interest,
        'collaboration_interest_specify' => $json->collaboration_interest_specify,
        'collaboration_proposal' => $json->collaboration_proposal,
        'previous_experience' => $json->previous_experience,
        'previous_experience_specify' => $json->previous_experience_specify,
        'expertise_to_offer' => $json->expertise_to_offer,
        'expertise_to_offer_specify' => $json->expertise_to_offer_specify,
        'resource_for_collaboration' => $json->resource_for_collaboration,
        'resource_for_collaboration_specify' => $json->resource_for_collaboration_specify,
        'collaboration_objective' => $json->collaboration_objective,
        'collaboration_objective_specify' => $json->collaboration_objective_specify,
        'partnership_type' => $json->partnership_type,
        'partnership_type_specify' => $json->partnership_type_specify,
        'collaboration_timeline' => $json->collaboration_timeline,
        'legal_and_regulatory_experience' => $json->legal_and_regulatory_experience,
        'ethical_and_environmental_standards' => $json->ethical_and_environmental_standards,
        'partnership_with_us' => $json->partnership_with_us,
        'additional_information_for_proposal' => $json->additional_information_for_proposal,
        'authorized_sign' => $json->authorized_sign,
        'authorized_name' => $json->authorized_name,
        'authorized_title' => $json->authorized_title,
        'authorized_date' => $json->authorized_date,
        'updated_at' => date('Y-m-d H:i:s'),
    ];
    
        

        if ($surveyModel->insert($data)) {
            return $this->response->setJSON(['success' => true]);
        } else {
            return $this->response->setStatusCode(ResponseInterface::HTTP_INTERNAL_SERVER_ERROR)
                ->setJSON(['success' => false, 'error' => 'Failed to save data']);
        }
    }
}
