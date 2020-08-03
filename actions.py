# This files contains your custom actions which can be used to run
# custom Python code.
#
# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/core/actions/#custom-actions/


# This is a simple example for a custom action which utters "Hello World!"

from typing import Any, Text, Dict, List

from rasa_sdk import Action, Tracker
from rasa_sdk.executor import CollectingDispatcher
from rasa_sdk.events import UserUtteranceReverted


class ActionGreetUser(Action):

    def name(self) -> Text:
        return "action_greet_user"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

        dispatcher.utter_message("Hey there I am your MEDBOT 👨🏽‍⚕️, How may I help you today")

        return [UserUtteranceReverted()] 

# class ActionCustomFallback(Action):   

#     def name(self) -> Text:
#         return "action_custom_fallback"
#     def run(self, dispatcher: CollectingDispatcher,
#             tracker: Tracker,
#             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
#         a=(tracker.latest_message)['text']
#         with open('input.txt','a+',encoding='utf-8') as f:
#             f.writelines(a+'\n')
#             print(f.read())
#         print(a)
#         dispatcher.utter_message(text='I am still learing please try again...')
#         return [UserUtteranceReverted()]