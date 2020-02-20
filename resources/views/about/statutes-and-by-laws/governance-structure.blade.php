@extends('layouts.app')

@section('title', 'Governance Structure')

@section('content')

    @component('partials.head')
        Governance Structure
    @endcomponent

    @component('partials.breadcrumb-about')
        Governance Structure
    @endcomponent

    <div class="container py-3">

        <div class="row">
            <div class="col">
                <h3>Article 14: Leading Bodies</h3>
                <p>The organization has the following leading bodies.</p>
                <ul>
                    <li>General Assembly (GA)</li>
                    <li>Board of Directors (BoD)</li>
                    <li>Executive Secretariat</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 15: General Assembly (GA)</h3>
                <p>The General Assembly is the highest decision-making body in hierarchy and authority and has the following formation:</p>
                <ul>
                    <li>All founding members and who are not at the same time staff members</li>
                    <li>All members of the Board of Directors</li>
                    <li>All new members that are annually appointed by the Board of Directors</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 16: Authorities and Functions of the General Assembly</h3>
                <p>The General Assembly has the following authorities and functions:</p>
                <ul>
                    <li>Hearing the annual reports of the Board of Directors and the Executive Directors.</li>
                    <li>Assessing the financial and operational status of the organization</li>
                    <li>Approving the annual budget and the work plan</li>
                    <li>Approval of the amendments and modifications in the statutes that are suggested by the Board of Directors</li>
                    <li>Deliberating on short and long term policies</li>
                    <li>Electing of members of the Board of Directors through secret ballot</li>
                    <li>Dismissal of those members of the Board of Directors who may have committed acts violating the provision of these statutes and have not been dismissed by the Board of Directors itself.</li>
                    <li>Deciding on merger or dissolution of the organization</li>
                    <li>Deciding on issues to be added to the agenda of General Assembly meeting</li>
                    <li>The GA meeting decision are to be recorded in a special book and signed by the present members in the meeting</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 17: Chairman of the GA</h3>
                <p>The Chairman of the Board of Directors will act as the Chairman for the General Assembly, but shall not have voting rights in the General Assembly meetings.</p>

                <h3>Article 18: Recording Secretary</h3>
                <p>Recording Secretary for the General Assembly will be elected only for the duration of every assembly meeting. Selection of the Secretary is by simple majority of votes from the GA members.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 19: Quorum and types of General Assembly meetings</h3>
                <p>The General Assembly meetings will be held with the presence of the 50 percent plus one of all members in two following manners:</p>
                <ul>
                    <li>Ordinary meetings
                        <ul>
                            <li>The ordinary meetings of the General Assembly will be held once a year during the second three months of the working year and will be presided by Chairman of the Board of Directors who shall also serve as the chairman for the GA</li>
                            <li>The Executive Secretariat will prepare the agenda, set the date and time of the meetings and send a notice letter to the members at least 30 days in advance of the General Assembly meeting.</li>
                            <li>Voting on decisions about every agenda item is public except when the provisions of these statutes require otherwise. Voting can be secret with the request of the half of all present members.</li>
                            <li>The quorum of 50 percent plus one is a requirement for decisions to be valid. If the quorum is not met, the General Assembly meeting will be postponed for a second meeting.</li>
                            <li>The second meeting shall be held within one month of the postponed meeting. In this meeting, decisions are voted by the simple majority of the present members. The quorum for the second meeting is one-third of all General Assembly members.</li>
                            <li>In the absence of a member, his/her authorized representative who shall possess an authorization letter and be a member of the General Assembly can attend the meeting and vote.</li>
                            <li>Each General Assembly member is entitled to a single vote excluding the chairman of the meeting.</li>
                        </ul>
                    </li>
                    <li>Extraordinary meetings
                        <ul>
                            <p>The extraordinary meetings will be held with the following criteria and conditions:</p>
                            <li>Requested either by 50+1% of the board of directors or the General Assembly Members.</li>
                            <li>In case of merging and dissolution of the organization or modification of the present statutes</li>
                            <li>The quorum for the meeting to be valid is two third of the total members of the General Assembly. If the quorum is not met in the first meeting, the second meeting will be held within 30 days that follow and will only require a quorum of 50 percent plus one member of all General Assembly members. The simple majority of present members in this meeting make decisions.</li>
                            <li>Members, who are not able to participate in extraordinary meetings, can delegate in writing their right to vote to another member.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 20: General Assembly membership criteria</h3>
                <p>Earning official membership of the General Assembly is possible through the following two ways:</p>
                <p>Members who automatically obtain the General Assembly membership are the following:</p>
                <ul>
                    <li>All founding members</li>
                    <li>All members of the Board of Directors</li>
                </ul>

                <p>Members who are annually elected by the Board of Directors, whose number cannot exceed 30 percent of the total number of General Assembly members during the previous year and having fulfilled the following criteria:</p>
                <ul>
                    <li>Have high ethical standards and good reputation</li>
                    <li>Not involved in founded allegations or sentences (criminal and administrative) of corruption or other similar abuses</li>
                    <li>Not convicted for crimes against humanity and other serious crime by a court</li>
                    <li>Be experienced, specialized and competent in one of the fields of activities of the organizationor able to bring other benefits, such as access to important networks, public standing, and the like</li>
                    <li>Be able to help the organization with specialized competence, institutional capacity or knowledge and expertise or to help the organization through reputation, access to relevant actors, and others</li>
                    <li>Believe in and commit to the vision, mission, objectives, principles and values of the organization</li>
                    <li>Candidates fulfilling these requirements shall be proposed by the Executive Director or at least two members of the Board of Directors and elected by a vote of five seventh (5/7) of the Board of Directors</li>
                    <li>Newly elected members will receive a written invitation letter to join the General Assembly, will fill in a special form and commit to respect the provisions of the present statutes</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 21: Dismissal and suspension of members</h3>
                <p>The General Assembly members will be dismissed in the following circumstances:</p>
                <ul>
                    <li>In case of two consecutive absences during General Assembly meetings without presenting a plausible excuse and without delegating his/her powers to another member.</li>
                    <li>Members who officially stop their cooperation with the organization, resign or express their lack of interest in being part of the organization</li>
                    <li>In case of committing an action that is considered crime by the Afghan laws and international agreements</li>
                    <li>In case of decease of the member</li>
                    <li>If GA members become members of the executive secretariat or pursue other employment opportunities with the organization, they will be suspended from their membership in the GA during the time of their contract when they are employed by the organization. They will recover automatically their membership after losing their employment with the organization with a good standing.</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 22: Board of Directors</h3>
                <p>The Board of Directors is composed of 7 members who are elected by secret ballot by the General Assembly and from among its candidate members and per specified criteria.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 23: Mandate and Membership Criteria of the Board of Directors</h3>
                <b>Duration of Mandate</b>
                <ul>
                    <li>Members are elected by the General Assembly for a mandate of two to three years.</li>
                    <li>To ensure that founding vision of the organization is upheld; the Founder will remain on the board of directors for an indefinite term, while the three founding board members will serve for seven years from the date of establishment of AfES, and then subject to their renewal of term, and their election by the GA; unless dismissed or suspended by the General Assembly as per the statutes. However, this article could be proposed for revision to the GA only after five years of the organization establishment.</li>
                </ul>
                <b>Criteria to be a Member of the Board of Directors</b>
                <ul>
                    <li>Not being an active politician</li>
                    <li>Having a good reputation, not considered as corrupt or having committed crime</li>
                    <li>Be specialized and experienced in one of the domains of activity of the organization and able to bring strategic thinking</li>
                    <li>Be constantly and consistently active in achieving like-minded goals and agendas</li>
                    <li>Not being an active high official of the state</li>
                    <li>Can allocate at least 15 days per year for the organization</li>
                    <li>Has high spirits towards strengthening of the evaluation function</li>
                    <li>Supports the organizational vision, mission and strategic objectives; adheres to its core values and commits and upholds these statutes</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 24: Nomination and Election of Board Members</h3>
                <ul>
                    <li>Anyone can self-nominate themselves from the General Assembly members and three more GA members shall second the nomination.</li>
                    <li>All members shall vote in favor or against (Yes or No) for each of the nominations, and 50+1% of votes are required. If there is more than 1 nomination, the candidate with highest votes will be elected that is meeting the requirement of 50+1%.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 25: Duties and Authorities of the Board of Directors</h3>
                <p>The Board of Directors duties and authorities are as follow:</p>
                <ul>
                    <li>Provide strategic guidance and oversight to the organization</li>
                    <li>Appointment and dismissal of the Executive Director</li>
                    <li>Approving the activity reports of the Executive Director and other relevant managers</li>
                    <li>Providing advice to the Executive Committee on the annual work plans</li>
                    <li>Approving and rejecting of the financial annual report</li>
                    <li>Observing the work plans and the activities achieved considering the project specifications</li>
                    <li>Approving long and short term strategies and policies as well as the annual work plans</li>
                    <li>Deciding on the establishment of field offices</li>
                    <li>Providing uninterrupted advice to the Executive Director and other members of the Executive Committee for implementing the decisions of the General Assembly and the Board of Directors and for improving the performance of the organization</li>
                    <li>Handling claims and complaints of the organization’s staff if these are not satisfied with internal processes handled by the Executive Committee</li>
                    <li>Presenting suggestions on dissolution, merger, renaming and amendments in the statutes to the General Assembly</li>
                    <li>Approving of internal rules for oversight and reporting</li>
                    <li>Simple majority makes decisions in the Board of Directors meeting, except when the provisions of these statutes explicitly refer to different modalities.</li>
                    <li>Approving the salary policy and internal rules and regulations</li>
                    <li>Electing of new members to the General Assembly and regularly publishing a final list of its existing members</li>
                    <li>The Board of Directors is responsible for making publicly available the list of the new members</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 26: Meetings of the Board of Directors</h3>
                <p>The meetings of the Board of Directors will be held with the presence of at least two thirds of its members, in the two following manners:</p>
                <b>Ordinary meetings:</b>
                <ul>
                    <li>The ordinary meetings will be held every four months.</li>
                    <li>If the quorum of two third is not met, the meeting will be postponed to the next time and voting for making decisions in this meeting will be done with the presence of at least one third of all members.</li>
                    <li>Chairman or General Secretary of the Board of Directors shall inform at least 15 days in advance all members of the agenda, the date and the place of the meeting.</li>
                </ul>
                <b>Extraordinary meetings</b>
                <p>The extraordinary meetings will be held in the following cases:</p>
                <ul>
                    <li>Requested by the Chairman of the Board of Directors</li>
                    <li>Requested by a two third of the members of the Board of Director</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 27: Chairman of the Board of Directors</h3>
                <p>The Principal Founder of Organization will serve as the Chairman of the Board of Directors to ensure upholding the original vision and mission of the organization, unless dismissed or suspended by the General Assembly as per relevant articles of the statutes.</p>
            </div>

            <div class="col">
                <h3>Article 28: Secretary General</h3>
                <p>Secretary General of the board of Directors is elected by the Board of Directors from among its members for the duration of one year. One member of the board shall nominate, another member shall second the nomination and then it shall be elected by voting. 50+1% of votes are required for electing the Secretary General.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 29: Dismissal or Suspension of Members</h3>
                <p>The permanent and temporary members of the Board of Directors will be dismissed from membership in the following conditions:</p>
                <ul>
                    <li>If the member is absent in the Board meetings more than two times in a year, without having reasonable excuse;</li>
                    <li>In case of committing violations or actions that are considered as crime by international agreements and Afghan laws;</li>
                    <li>Repeatedly not honoring committed tasks;</li>
                    <li>Resignation of the member;</li>
                    <li>Death of the member.</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 30: Composition of the Executive Secretariat</h3>
                <p>The overall Executive Secretariat is structured as following. Out of the following structure, all six directors form the “Executive Committee” presided by the Executive Director; and makes key organizational decisions.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 31: Selection of the Executive Committee</h3>
                <ul>
                    <li>The Executive Director and Deputy Director are appointed for a period of three years by the Board of Directors. Their mandate is renewable.</li>
                    <li>The Executive Committee is composed of the Directors of the Executive Secretariat</li>
                    <li>Other members of the Executive Committee will be recruited by the Executive Director or the Deputy Director as per internal rules and regulations</li>
                    <li>The Executive Director and the Deputy Director will decide the recruitment of all other staff based on organization’s needs, the terms of these statutes, Afghan labor laws and internal rules and regulations.</li>
                    <li>The Executive Director and the Deputy Director shall delegate their authorities to other members of the Executive Committee in their absence.</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 32: Executive Committee meetings</h3>
                <ul>
                    <li>The Executive Committee meetings will be held monthly presided by the Executive Director or the Deputy Director. The Executive Committee members will present their reports to the meeting.</li>
                    <li>In the absence of the Executive Director, the Deputy Director will chair the meetings.</li>
                    <li>If needed, extraordinary Executive Committee meetings can also be called by the Executive Director, the Deputy Director or by majority of members</li>
                    <li>In the Executive Committee meetings, the activities and projects will be evaluated and relevant decisions will be made on discussed issues</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 33: Duties and authorities of the Executive Committee</h3>
                <p>The Executive Committee has the following duties and responsibilities:</p>
                <ul>
                    <li>Designing and preparing organization’s internal rules and regulations</li>
                    <li>Designing of long term programs and seeking their approval by the Board of Directors</li>
                    <li>Strengthening operational and human capacities of the organization</li>
                    <li>Finalizing reports and publication materials</li>
                    <li>Guiding and orienting the goals and activities</li>
                    <li>Implementing all General Assembly and Board of Directors’ decisions</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 34: Duties and authorities of the Executive Director</h3>
                <p>The Executive Director, who represents and has the legal authority to act in the name of the organization, has the following duties and authorities that can be delegated to the Deputy Director:</p>
                <b>Authorities</b>
                <ul>
                    <li>Attend the meetings, national and international seminars and governmental and non-governmental coordination meetings on behalf of the organization</li>
                    <li>Recruitment and dismissal of the personnel according to these statutes</li>
                    <li>Look after the preparation of the monthly, semi-annual and annual reports.</li>
                    <li>Monitor the quality of the work according to the agreed plans</li>
                    <li>Supervise the financial and administrative affairs of the organization</li>
                    <li>Appreciate, praise and promote the personnel based on the organization’s internal standards.</li>
                    <li>Advise, warn and dismiss the personnel based on the internal rules and regulations</li>
                    <li>Propose work reorganization</li>
                    <li>Signing of contracts and protocols with donors and other helping sources of the organization</li>
                    <li>The Executive Director and Deputy Director shall delegate their authorities to one of the members of the Executive Committee in their absence</li>
                </ul>
                <b>Duties</b>
                <ul>
                    <li>Implement General Assembly and Board of Directors’ decisions</li>
                    <li>Design implementation strategy in consultation and with the approval the Board of Directors and report on the its implementation</li>
                    <li>Carry on daily financial, administrative and operational tasks and activities</li>
                    <li>Establish order and discipline among the staff</li>
                    <li>Make proposals and secure funding</li>
                    <li>Prepare and submit reports on organization’s activities and achievements to the Board of Directors on a regular basis and every four months</li>
                    <li>Release instructions and procedures for improving the implementation of the activities</li>
                    <li>Prepare working plans and distribute duties among the members of the Executive Committee</li>
                    <li>Solve problems facing the organization and handle claims and complaints addressed to the organization</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 35: Dismissal of members</h3>
                <p>The Executive Committee members can be dismissed in the following cases:</p>
                <ul>
                    <li>Not fulfilling of tasks and commitments</li>
                    <li>Committing actions which are considered as crime by Afghan laws and international agreements</li>
                    <li>Repeatedly violating internal rules and regulation, not performing the duties written in the job description</li>
                </ul>
            </div>

            <div class="col">
                <h3>Article 36: Legal representation</h3>
                <p>The Executive Committee head or any other person authorized by the Board of Directors is the organization’s authorized decision maker and shall legally represent the organization before all official authorities and courts.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Article 37: Presence in meetings of the Board of Directors</h3>
                <p>The Executive Committee members shall attend the meetings of the Board of Directors with the request of the latter, but do not have voting rights.</p>
            </div>

            <div class="col">
                <h3>Article 38: Oversight and investigation</h3>
                <p>The Board of Directors is the main body responsible for oversight and investigation for ensuring transparency and will act as the internal auditor through the following:</p>
                <ul>
                    <li>Designing and implementing an oversight mechanism to ensure accountability and transparency in the working of the organization based on the provision of these statutes and internal rules and regulations</li>
                    <li>Overseeing and investigating operations related to financial, accounting and assets management and making sure they are transparent</li>
                    <li>Overseeing the activities and decisions of the Executive Committee, the finance manager and the Executive Committee for accountability</li>
                    <li>Assessing annual financial records according to national and international standards, and submitting the report on its accuracy to the General Assembly.</li>
                    <li>Considering and handling personnel complaints stemming from misbehavior of the upper management.</li>
                    <li>Monitoring of project implementation process and matching it with the terms of the contracts. Investigating if abuses were found.</li>
                    <li>Following the implementation of the General Assembly and Board of Directors’ decisions.</li>
                </ul>
            </div>
        </div>

    </div>

@endsection
