#React

<h2>Overview</h2>
  - [Introduction](#introduction)
  - [Concept](#concept)
    - [How it Works](#how-it-works)
    - [Ambiguity & GSR](#ambiguity--gsr)
    - [Social Component](#social-component)
    - [Target Audience](#target-audience)
    - [Context](#context)
  - [Team](#team)
    - [Members](#members)
    - [Roles & Responsibilities](#roles--responsibilities)
    - [Decision Making](#decision-making)
    - [Issue Handling](#issue-handling)
  - [Communication](#communication)
    - [Meetings](#meetings)
    - [Online Communication](#online-communication)
    - [File Sharing](#file-sharing)
    - [Version Control](#version-control)
    - [File Name Conventions](#file-naming-conventions)
  - [Plan](#plan)
    - [Some Preliminary Notes on the Structure of Our Project Plan](#some-preliminary-notes-on-the-structure-of-our-project-plan)
    - [Overall Project Plan](#overall-project-plan)
    - [Breakdown of Milestones & Task Allocation](#breakdown-of-milestones--task-allocation)
  - [Tags](#tags)
  - [References](#references)

<h2>Introduction</h2>
Although few studies have examined the effects of news on consumers’ affective state (Szabo & Hopkinson, 2007), it is commonly understood that news can and does psychologically impact those who consume it (Sisson, 2016; Singal, 2016; Gregoire, 2015; Davey, 2012) but not always in the ways we might expect (*Brutality-Desensitization Process Nearly Complete*, 1999). 

While affective data has already been utilized for recommender systems (Tkalcic, Kosir & Tasic, 2011), the application of affective feedback to news consumption is an unexplored space. There are no commercial products or applications designed to bring ordinary news consumers awareness of their affective state while consuming news. 

Our concept, React, aims to change this. 

The primary objective of this project is to see how the introduction of the prototype we develop can lead to human values emerging surrounding the application of affective feedback to news consumption. We endeavor to explore what awareness of affective data might mean to people, and how designers can leverage emerging human values in order to develop socially meaningful applications within this space.

<h2>Concept</h2>
React is an application that enables users to have greater awareness of the magnitude of their own reactions to particular news stories. It is comprised of a smartphone app and a wearable bracelet. When the smartphone app is open, the bracelet measures the user’s real-time galvanic skin response (“GSR”), which is indicative of psychological or physiological arousal. This data is then sent to the smartphone app, which provides the user with a more detailed report of their reactions to varying news stories.

![concept image](/concept.png)

<h4>How it Works</h4>
The bracelet component of React is intended to be worn regularly by users, but it will only turn on once users open the React smartphone app and press “track” after finding a news story to read or watch (and inputting its url). As users consume the news story, the bracelet will measure and visualize their GSR. When they are done consuming the news story, users must “stop” the tracking (which will also turn off the bracelet). The smartphone app will then provide them with a graph of their GSR throughout the duration of their consumption time as well as their average GSR, their high, and their low (out of 10, where 10 indicates the highest level of arousal). Additionally, users may compare their own data to that of other anonymous users who have consumed the same news story.

Consistently using React will build up a history of data for users to reflect on. Users can begin to understand their own reactions within a wider context. Using React while consuming news will bring about greater awareness of the impact (or potentially lack thereof) of specific news as it’s being consumed.

<h4>Ambiguity & GSR</h4>
There is a lot of ambiguity in GSR because an increase in skin conductance can be the result of either positive or negative stimuli. This ambiguity meshes well with React, as the purpose of the application is not to measure the qualitative nature of arousal, but to instead measure the mere existence of any arousal at all.

<h4>Social Component</h4>
React compiles all user data for every news story and provides an average “reaction magnitude,” allowing users to compare their own reaction to that of others.

<h4>Target Audience</h4>
React is primarily intended for people who want to be more aware of the impact (or lack thereof) that consuming particular news stories has on them (and other people). As specific human values are identified after the introduction of our bracelet prototype, our target audience will become narrower. See “Some Preliminary Notes on the Structure of Our Project Plan” under “Plan” for more information regarding the scope of this project.

The data React will collect can bring about greater societal awareness of what news requires in order to provoke arousal. This data can therefore be of great use to journalists and researchers. That being said, the application we will develop within this course will be targeted at ordinary news consumers only. We believe that ordinary news consumers must have a personal incentive for wanting awareness of GSR data before such data could even possibly be tracked on a scale large enough to be sufficiently accessible to journalists and researchers. As such, React encompasses personal use and does not extend consideration to more wide-reaching uses of GSR data (though numerous potentialities for such uses certainly do exist).

<h4>Context</h4>
The initial prototype of React (to be developed before the Week 8 standup presentation) will be constructed in order to deliver awareness to users of their affective state while consuming news stories. The scope of this project, however, extends beyond sheer awareness. We intend to develop a more targeted application that builds on the application we describe above. 

There is so much that can be done with the GSR data that React will collect. Possibilities include:

+ only showing impactful news stories when users wish to consume them
+ making personalized recommendations of “non-numbing” news stories
+ utilizing haptic feedback to indicate to users what the average reaction magnitude was to the news story they are consuming as they are consuming it
+ and so much more...

The purpose of our intended early release of the initial prototype of the application described above is to allow us to more clearly identify human values that emerge in response to the awareness that this prototype provides. For a clearer explanation of why we have chosen to conduct the project in this manner, see “Some Preliminary Notes on the Structure of Our Project Plan” under “Plan,” which provides more coherent justifications in regards to the scope of this project.

<h2>Team</h2>
<h4>Members</h4>
![members table](/members.png)

<h4>Roles & Responsibilities</h4>
All team members will contribute to all aspects of the project. Members with specific expertise in certain areas will take on leadership roles within those areas and will share their knowledge in order to help other team members help them. Task distribution will vary based on personal preference and skills. As all team members are Master of Interaction Design students, general design-related tasks will be completed by everyone.

![roles table](/roles.png)

<h4>Decision Making</h4>
All team decisions will be made collaboratively. If the team cannot reach a consensus, decisions will be made based on majority rule. In certain circumstances, team members most affected by the outcome of a certain decision may have great power than other members in terms of the decision that gets made (e.g. those in charge of making promotional material will have a greater voice in terms of what that material will be, and what it will look like). Once decisions have been reached, all team members must agree to fully accept, support, and commit to those decisions. If, at any point, a team member does not like a decision that was reached, this issue should be discussed openly within the team. If the decision pertains to an increased workload for that team member, adjustments to the project plan can be made so that workload distribution is more equitable. 

<h4>Issue Handling</h4>
The team may face issues relating to underperformance or conflicts.

In the case that a team member does not complete the work allocated to them within the defined timeframe or to the agreed standard, the rest of the team will discuss the issue with the underperforming team member in hopes that the member will respond to this and put more effort into the project. If, after discussion, the team member is still underperforming, the rest of the team will reallocate the team member’s tasks and responsibilities. If this issue persists throughout the project, the course coordinator will be informed and peer assessment may be requested. 

In general, it is expected that team members inform the rest of the team as soon as possible if they will be unable (for whatever reason) to complete their assigned tasks on time or to the agreed standard. If such events occur, the team must evenly divide the remaining work if no specific team member is keen to take it on alone. Reallocation of other work may also occur in the event that the leftover work to be done does not suit the skill set of all team members.

If there are any disputes within the team, the team will agree to admit that conflict is present and needs to be resolved. Attempts will be made to understand the conflict from all perspectives. Those involved in the conflict should communicate openly with the intentions of reaching an agreement and moving forward. In the case that the team’s attempts at conflict resolution do not succeed, advice will be sought from tutors and the course coordinator.

<h2>Communication</h2>
<h4>Meetings</h4>
Face-to-face meetings will serve as the team’s main method of communication. Regular meetings will be held in the in-class studio sessions (Monday 1-2pm; Wednesday 4-6pm) and every Thursday from 1-3pm. If more time is required, the team will refer to an availability chart completed by all team members to decide an appropriate time to meet. An agenda will be prepared for each meeting. This agenda will include discussion points for decision making, things to do within the meeting (e.g. wireframes, partner coding, etc.), and task allocation (to be completed by team members before the next meeting). Some impromptu team discussions may occur before or after other classes that team members share (as all team members have common classes and all see each other Monday through Friday).

Aside from in-class studio sessions, all other meetings will take place in 78-209 or 78-207. Access to 78-207 has been approved for all team members.

<h4>Online Communication</h4>
A private group channel has been set up on Slack (#react @ https://deco3500.slack.com) for general communication, as all team members are familiar with Slack and already use Slack on a daily basis. Since Slack is a cross-platform instant messaging application, its notifications can enable all team members to stay updated easily. Slack will be used for communicating updates on project progress or difficulties, file-sharing Google Drive files, and syncing GitHub activity. All team members are expected to continue to check Slack on a daily basis. Additionally, all team members have enabled mobile notifications for any activity within the team Slack channel, so it is anticipated that messages will likely be read by everyone within a few hours of them being sent. Since the Slack channel has been created within the existing course Slack team for DECO7350, using this platform will simultaneously encourage team members to keep updated with general course announcements.

<h4>File Sharing</h4>
A shared Google Drive folder has been created for collaborative work on project documents. Any project criteria documents published on Blackboard have been copied into this folder for easier access.

<h4>Version Control</h4>
A GitHub repository has been created to sync programming files. Milestones and issues will be created and allocated to team members by referencing the project plan. ZenHub will be used for improved visualization of the project repository. It will also assist in project management. 

<h4>File Naming Conventions</h4>
Underscores will be used as a delimiter within all file names. Files should be logically named according to the defined category they pertain to, followed by an underscore and the name of a more specific category. For categories that are more than one word, camelCase with the first letter lowercased should be employed. Finally, each file should contain a version number at the end in the form “v#.” An example of a properly named file is: “bracelet_readGsr_v3.” In general, file names should be kept as concise as possible.

<h2>Plan</h2>
<h4>Some Preliminary Notes on the Structure of Our Project Plan</h4>
Please note that the second half of our project plan is deliberately ambiguous. We don’t want to define the value of the awareness our application provides from the start of our project because this awareness will mean different things to different people. For instance, if someone’s data shows that they had barely no response to a tragic news story, they might feel happy about this and happy about the fact that they can move on with their life without feeling overly affected. A different person might feel bad, and feel as if they are “heartless” or “too numb to feel anything at all.” Our intention with this project is to first just provide this base level of awareness, and to study what users may make of this awareness, what it will mean to them, and how it may influence the ways that they read and consume news. After prototyping and user testing (which will take place in Week 8), we will design and develop a more specific application that responds to the specific human values we identify.

The format of our project plan is in response to Dekker’s provided feedback both in conversation and on GitHub. He agreed with us that we should first make efforts to understand what the GSR data means to people before proposing a specific usage of this data, and suggested that we focus on two separate iterations. “Step one, get the data. Step two, play with the data.” (Dekker) 

Since the application of affective feedback to news consumption is such an unexplored space, it is crucial to first identify what this data actually is (e.g. do the readings vary greatly?; are the readings actually indicative of the response people think they had?), and what it may mean to people (e.g. what do people want to see done with this data?; in what ways might people value awareness of this data, and why?). As such, we have purposefully refrained from being specific about what exactly we may build for our final prototype and how it may utilize the GSR data. Although we will eventually build a more targeted prototype, we should reiterate that our primary objective with this project is to see how the introduction of our initial bracelet prototype can lead to human values emerging surrounding the application of affective feedback to news consumption. This project is an exploration of what this awareness might mean to people, and how designers can leverage emerging human values in order to develop socially meaningful applications within this space.

<h4>Overall Project Plan</h4>
![plan table](/plan.png)

<h4>Breakdown of Milestones & Task Allocation</4>


<h2>Tags</h2>
\#awareness \#humanvalues \#affectivecomputing \#ambiguity \#wearabletechnology \#internetofthings \#newsconsumption

<h2>References</h2>
*Brutality-Desensitization Process Nearly Complete.* (1999). *The Onion.* Retrieved 4 September 2016, from http://www.theonion.com/article/brutality-desensitization-process-nearly-complete-734

Davey, G. (2012). *The Psychological Effects of TV News.* *Psychology Today.* Retrieved 4 September 2016, from https://www.psychologytoday.com/blog/why-we-worry/201206/the-psychological-effects-tv-news

Gregoire, C. (2015). *What Constant Exposure To Negative News Is Doing To Our Mental Health.* *Huffington Post Australia.* Retrieved 4 September 2016, from http://www.huffingtonpost.com.au/entry/violent-media-anxiety_n_6671732

Singal, J. (2016). *What All This Bad News Is Doing to Us. Science of Us.* Retrieved 4 September 2016, from http://nymag.com/scienceofus/2014/08/what-all-this-bad-news-is-doing-to-us.html

Sisson, M. (2016). *How the News Impacts Your Health (and What You Can Do About It).* *Mark's Daily Apple.* Retrieved 4 September 2016, from http://www.marksdailyapple.com/how-the-news-impacts-your-health-and-what-you-can-do-about-it/#axzz4JFPZwDAZ

Szabo, A., & Hopkinson, K. L. (2007). Negative psychological effects of watching the news in the television: Relaxation or another intervention may be needed to buffer them!. *International Journal of Behavioral Medicine*, 14(2), 57-62.

*The Noun Project.* Retrieved 4 September 2016, from https://thenounproject.com/

Tkalcic, M., Kosir, A., & Tasic, J. (2011). Affective recommender systems: the role of emotions in recommender systems. In *Proc. The RecSys 2011 Workshop on Human Decision Making in Recommender Systems* (pp. 9-13).
